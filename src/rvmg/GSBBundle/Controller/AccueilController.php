<?php

namespace rvmg\GSBBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Formulaires\Data\ConnexionClass;
use rvmg\GSBBundle\Formulaires\Type\ConnexionFormType;


class AccueilController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('name' => $name));
    }
    
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
                        $session->set('user_id', $visiteur->getIdVisiteur());
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
                        $session->set('user_id', $comptable->getIdComptable());
                        return $this->render('rvmgGSBBundle:Comptable:accueilComptable.html.twig', array('comptable'=>$comptable));
                    }
                    break;
                default:
                    echo 'Profil inexistant';
                    break;
            }
            
            return $this->render('rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig', array('data'=>$data));
        }
        
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
    }
}
