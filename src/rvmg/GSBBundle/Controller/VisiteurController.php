<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Form\LignefraisforfaitType;
use rvmg\GSBBundle\Form\LignefraishorsforfaitType;
use rvmg\GSBBundle\Entity\Lignefraisforfait;
use rvmg\GSBBundle\Entity\Lignefraishorsforfait;
use rvmg\GSBBundle\Entity\Fichefrais;
/**
 * Description of VisiteurController
 *
 * @author eleve
 */
class VisiteurController extends Controller{
    
    public function renseignerAction($type){
        
        if($type == 'forfait'){
            $ligneForfait = new Lignefraisforfait();
            $form = $this->createForm(new LignefraisforfaitType(), $ligneForfait);
            $vue = 'rvmgGSBBundle:Visiteur:renseignerForfait.html.twig';
        }
        if($type == 'horsforfait'){
            $ligneHorsForfait = new Lignefraishorsforfait();
            $form = $this->createForm(new LignefraishorsforfaitType(), $ligneHorsForfait);
            $vue = 'rvmgGSBBundle:Visiteur:renseignerHorsForfait.html.twig';
        }
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        
        /* Récupération de tous les frais forfait */
        $fraisForfait = $em->getRepository('rvmgGSBBundle:Fraisforfait')->findAll();
        
        if($form->isValid()){
            
            $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')->findOneBy($this->getRequest()->getSession()->get('user_id'));
            $ficheFrais = $em->getRepository('rvmgGSBBundle:Fichefrais')->findOneByCurrentMonth($visiteur);
            
           
            $em->flush();
            
            return $this->render($vue, array('form'=>$form->createView()));
            
        }
        
        /* On envoie dans la vue le paramètre frais qui contient tous les frais forfait */
        return $this->render($vue, array('frais'=>$fraisForfait));
    }
    
    public function consulterAction(){
        
        
        
    }
    
}
    