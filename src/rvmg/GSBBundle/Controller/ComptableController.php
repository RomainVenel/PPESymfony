<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use rvmg\GSBBundle\Formulaires\Type\ChooseMonthAndVisitorType;
/**
 * Description of ComptableController
 *
 * @author eleve
 */
class ComptableController extends Controller{
    
    public function validerAction(){
        $choose = new ChooseMonthAndVisitorClass();
        $form = $this->createForm(new ChooseMonthAndVisitorType(),$choose);        
        
        $request = $this->container->get('request');
        
        $form->handleRequest($request);
        $this->getRequest()->getSession()->clear();
        
        if ($form->isValid()){
            $idVisiteur = $choose->getVisitor()->getIdVisiteur();
            $month = $choose->getMonth()->format('m-y');
            echo $idVisiteur." ".$month;
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
        }
        return $this->render('rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig', array('form'=>$form->createView()));
    }
    
    public function suivreAction(){
        
    }
    
}