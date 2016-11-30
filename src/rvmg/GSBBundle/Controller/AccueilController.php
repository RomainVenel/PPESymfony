<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('name' => $name));
    }
    
    public function connexionAccueilAction(){
        
        $form = $this->createFormBuilder()
                ->add('login', 'text')
                ->add('mdp', 'password')
                ->add('profil', 'choice', array('choices'=>array('Visiteur'=>'Visiteur',
                                                                 'Comptable'=>'Comptable'), 'expanded'=>true), array('required'=>true))
                ->add('valider', 'submit')
                ->add('annuler', 'reset')
                
                ->getForm();
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        if ($form->isValid()){
            $data = $form->getData();
            return $this->render('rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig', array('data'=>$data));
        }
        
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
    }
}
