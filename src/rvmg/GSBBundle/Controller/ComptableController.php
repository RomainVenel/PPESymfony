<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use rvmg\GSBBundle\Formulaires\Type\ChooseMonthAndVisitorType;
/**
 * Description of ComptableController
 *
 * @author Romain Venel & Maxime Genevier
 * 
 * This class manage the part of the comptable. It's allow him to purchase 
 * and validate a fichefrais according to the visitor
 */
class ComptableController extends Controller{
    
    /**
     * 
     * @return type
     * Function that's let the comptable watch and choose about the differents
     * lignefraisforfait and lignefraishorsforfait
     */
    public function validerAction(){
        $choose = new ChooseMonthAndVisitorClass();
        $form = $this->createForm(new ChooseMonthAndVisitorType(),$choose);        
        
        $request = $this->container->get('request');
        
        $form->handleRequest($request);
        $this->getRequest()->getSession()->clear();
        
        if ($form->isValid()){
            $visitor = $choose->getVisitor();
            $month = $choose->getMonth();
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            
            //Try to find a Fichefrais
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
            $fichefrais = $repository->findOneByMonthAndVisitor($visitor, $month);
            
            //If $fichefrais is empty, display a message at the user to inform him
            //that's there's no fichefrais for this month and visitor
            if(!$fichefrais){
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Il n\'y a pas de fiche de frais pour ce visiteur ce mois.');
                return $this->render('rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig',
                        array('form'=>$form->createView()));
            }
            //In the other case, we search all Lignefraisforfait and Lignefraishorsforfait
            //to display them 
            else{
                
                $repositoryForfait = $em->getRepository('rvmgGSBBundle:Lignefraisforfait');
                $repositoryHorsForfait = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait');
                
                $listLigneForfait = $repositoryForfait->findByIdfichefrais($fichefrais);
                $listLigneHorsForfait = $repositoryHorsForfait->findByIdfichefrais($fichefrais);
                
                $tableForfait = array(array("name"=>"Frais forfait",
                    "listForfait"=>$listLigneForfait,
                    "type"=>"forfait"),
                    array("name"=>"Frais hors forfait",
                        "listForfait"=>$listLigneHorsForfait,
                        "type"=>"horsforfait"));
                
                return $this->render('rvmgGSBBundle:Comptable:validationFicheFrais.html.twig',
                        array('tableForfait'=>$tableForfait));
                
            }            
        }
        return $this->render('rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig', 
                array('form'=>$form->createView()));
    }
    
    public function suivreAction(){
        
    }
    
}
