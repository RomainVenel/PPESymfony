<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        
        if ($form->isValid()){
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            switch($connexion->getProfil()){
                case 'Visiteur':
                    $repository = $em->getRepository('rvmgGSBBundle:Visiteur');
                    $visiteur = $repository->findOneByLogin($connexion->getLogin());
                    if(!$visiteur){
                        throw $this->createNotFoundException('Visiteur inexistant!');
                    }
                    break;
                case 'Comptable':
                    $repository = $em->getRepository('rvmgGSBBundle:Comptable');
                    $comptable = $repository->findOneByLogin($connexion->getLogin());
                    if(!$comptable){
                        throw $this->createNotFoundException('Comptable inexistant!');
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
