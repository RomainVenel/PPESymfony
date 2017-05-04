<?php

namespace rvmg\GSBBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Formulaires\Data\ConnexionClass;
use rvmg\GSBBundle\Formulaires\Type\ConnexionFormType;


class AccueilController extends Controller{
    
    /**
     * 
     * @return type
     * 
     * Function that allows the connexion of the user
     */
    public function connexionAccueilAction(){
        
        //Initiate the ConnexionClass
        $connexion = new ConnexionClass();
        //Create the form
        $form = $this->createForm(new ConnexionformType(),$connexion);        
        
        $request = $this->container->get('request');
        
        $form->handleRequest($request);
        $this->getRequest()->getSession()->clear();
        
        //IF the form is valid
        if ($form->isValid()){
            
            //Get the form's data
            $data = $form->getData();
            
            //Get Doctrine Manager
            $em = $this->getDoctrine()->getManager();
            
            //SWITCH profil
            switch($connexion->getProfil()){
                
                //VISITEUR
                case 'Visiteur':
                    
                    //Get the repository and try to find the visiteur with the params past in the form
                    $repository = $em->getRepository('rvmgGSBBundle:Visiteur');
                    $visiteur = $repository->findByMdpAndLogin($connexion->getLogin(), $connexion->getMdp());
                    
                    //IF the visitor is empty
                    if(!$visiteur){
                        //Redirect the user to the error view
                        $request->getSession()
                        ->getFlashBag()
                        ->add('error', 'Login et/ou mdp incorrect(s)');
                        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
                    }
                    //ELSE
                    else{
                        //Create the session with the data we need 
                        $session = $request->getSession();
                        $session->set('user_login', $visiteur->getLogin());
                        $session->set('user_prenom', $visiteur->getPrenom());
                        $session->set('user_nom', $visiteur->getNom());
                        $session->set('user_profil', $visiteur->getProfil());
                        $session->set('user_firstname', $visiteur->getPrenom());
                        $session->set('user_lastname', $visiteur->getNom());
                        $session->set('user_id', $visiteur->getIdvisiteur());
                        //Update the value 'connecte' to true
                        $repository->updateConnecteToTrue($connexion->getLogin());
              
                        //Return the welcome page
                        return $this->render('rvmgGSBBundle:Visiteur:accueilVisiteur.html.twig');
                    }
                    break;
                    
                //COMPTABLE
                case 'Comptable':
                    
                    //Get the repository and try to find the comptable with the params past in the form
                    $repository = $em->getRepository('rvmgGSBBundle:Comptable');
                    $comptable = $repository->findByMdpAndLogin($connexion->getLogin(), $connexion->getMdp());
                    
                    //IF the comptable is empty
                    if(!$comptable){
                        //Redirect user to error page
                        $request->getSession()
                        ->getFlashBag()
                        ->add('error', 'Login et/ou mdp inccorect(s)');
                        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
                    }
                    //ELSE
                    else{
                        
                        //Create the session with the data we need 
                        $session = $request->getSession();
                        $session->set('user_login', $comptable->getLogin());
                        $session->set('user_prenom', $comptable->getPrenom());
                        $session->set('user_nom', $comptable->getNom());
                        $session->set('user_profil', $comptable->getProfil());
                        $session->set('user_firstname', $comptable->getPrenom());
                        $session->set('user_lastname', $comptable->getNom());
                        $session->set('user_id', $comptable->getIdcomptable());
                        //Update the value connecte to true
                        $repository->updateConnecteToTrue($connexion->getLogin());
                        
                        //Redirect the user on the welcome page
                        return $this->render('rvmgGSBBundle:Comptable:accueilComptable.html.twig');
                        
                    }
                    
                    break;
                
                //DEFAULT
                default:
                    
                    echo 'Profil inexistant';
                    break;
            }
            
        }
        
        //Render the form for connexion function        
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
    }
    
    /**
     * 
     * @return type
     * 
     * Function that disconnects the user
     */
    public function deconnexionAction(){
        
        //Get Doctrine Manager
        $em = $this->getDoctrine()->getManager();

        //Get the login
        $profil = $this->getRequest()->getSession()->get('user_login');
        
        //Test the profil to find the repository
        if ($this->getRequest()->getSession()->get('user_profil') == 'Visiteur'){
            $repository = $em->getRepository('rvmgGSBBundle:Visiteur');
        }else{
            $repository = $em->getRepository('rvmgGSBBundle:Comptable');
        }
        
        //Update the value "connecte" in the database to false
        $repository->updateConnecteToFalse($profil);
        
        //Clear the session
        $this->getRequest()->getSession()->clear();
        
        //Render the view disconnected
        return $this->render('rvmgGSBBundle:Accueil:vueDeconnexion.html.twig');
    }
    
    public function aProposAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        return $this->render('rvmgGSBBundle:Accueil:aPropos.html.twig');
    }
}
