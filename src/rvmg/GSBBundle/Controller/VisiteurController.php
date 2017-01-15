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
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')->findOneBy($this->getRequest()->getSession()->get('user_id'));
            $fichefrais = $em->getRepository('rvmgGSBBundle:Fichefrais')->findOneByCurrentMonth($visiteur);
            
           
            $em->flush();
            
            return $this->render($vue, array('form'=>$form->createView()));
            
        }
        
        return $this->render($vue, array('form'=>$form->createView()));
    }
    
    public function consulterAction(){
        
        
        
    }
    
}
    