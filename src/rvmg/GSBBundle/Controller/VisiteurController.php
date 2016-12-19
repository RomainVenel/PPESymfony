<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Form\LignefraisforfaitType;
use rvmg\GSBBundle\Form\LignefraishorsforfaitType;
/**
 * Description of VisiteurController
 *
 * @author eleve
 */
class VisiteurController extends Controller{
    
    public function renseignerAction($type){
        
        if($type == 'forfait'){
            $form = $this->createForm(new LignefraisforfaitType());
            $vue = 'rvmgGSBBundle:Visiteur:renseignerForfait.html.twig';
        }
        if($type == 'horsforfait'){
            $form = $this->createForm(new LignefraishorsforfaitType());
            $vue = 'rvmgGSBBundle:Visiteur:renseignerHorsForfait.html.twig';
        }
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        if($form->isValid()){
            
        }
        
        return $this->render($vue, array('form'=>$form->createView()));
    }
    
}
    