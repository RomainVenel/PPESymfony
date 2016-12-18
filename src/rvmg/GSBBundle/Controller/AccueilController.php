<?php

namespace rvmg\GSBBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Formulaires\Data\ConnexionClass;
use rvmg\GSBBundle\Formulaires\Type\ConnexionFormType;


class AccueilController extends Controller{
    
    public function connexionAccueilAction(){
        
        $connexion = new ConnexionClass();
        $form = $this->createForm(new ConnexionformType(),$connexion);        
        
        $request = $this->container->get('request');
        
        $form->handleRequest($request);
        $this->getRequest()->getSession()->clear();
        
        if ($form->isValid()){
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            switch($connexion->getProfil()){
                case 'Visiteur':
                    $repository = $em->getRepository('rvmgGSBBundle:Visiteur');
                    $visiteur = $repository->findByMdpAndLogin($connexion->getLogin(), $connexion->getMdp());
                    
                    if(!$visiteur){
                        return $this->render('rvmgGSBBundle:Accueil:vueConnexionErreur.html.twig', array('data'=>$data));
                    }else{
                        $session = $request->getSession();
                        $session->set('user_login', $visiteur->getLogin());
                        $session->set('user_profil', $visiteur->getProfil());
                        $repository->updateConnecteToTrue($connexion->getLogin());
              
                        return $this->render('rvmgGSBBundle:Visiteur:accueilVisiteur.html.twig', array('visiteur'=>$visiteur));
                    }
                    break;
                case 'Comptable':
                    $repository = $em->getRepository('rvmgGSBBundle:Comptable');
                    $comptable = $repository->findByMdpAndLogin($connexion->getLogin(), $connexion->getMdp());
                    if(!$comptable){
                        return $this->render('rvmgGSBBundle:Accueil:vueConnexionErreur.html.twig', array('data'=>$data));
                    }else{
                        $session = $request->getSession();
                        $session->set('user_login', $comptable->getLogin());
                        $session->set('user_profil', $comptable->getProfil());
                        $repository->updateConnecteToTrue($connexion->getLogin());
                        
                        return $this->render('rvmgGSBBundle:Comptable:accueilComptable.html.twig', array('comptable'=>$comptable));
                    }
                    break;
                default:
                    echo 'Profil inexistant';
                    break;
            }
            
            return $this->render('rvmgGSBBundle:Accueil:vueConnexionComptable.html.twig', array('data'=>$data));
        }
        
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
    }
    
    public function deconnexionAction(){
        
        $em = $this->getDoctrine()->getManager();

        $profil = $this->getRequest()->getSession()->get('user_login');
        
        if ($this->getRequest()->getSession()->get('user_profil') == 'Visiteur'){
            $repository = $em->getRepository('rvmgGSBBundle:Visiteur');
        }else{
            $repository = $em->getRepository('rvmgGSBBundle:Comptable');
        }
        $repository->updateConnecteToFalse($profil);
        
        $this->getRequest()->getSession()->clear();
        
        return $this->render('rvmgGSBBundle:Accueil:vueDeconnexion.html.twig');
    }
}
