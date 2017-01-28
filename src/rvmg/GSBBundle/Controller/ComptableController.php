<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use rvmg\GSBBundle\Formulaires\Type\ChooseMonthAndVisitorType;
use rvmg\GSBBundle\Entity\Fichefrais;
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
    public function chooseMonthAndVisitorAction(){
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
    
    /**
     * 
     * @param type $fichefrais
     * 
     * Function that's validate the fichefrais past in param
     * Change it state at VALIDEE
     */
    public function validateAction($fichefrais){
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
        $currentFicheFrais = $repository->findOneByIdfichefrais($fichefrais);
        
        if($currentFicheFrais){
            $state = $em->getRepository('rvmgGSBBundle:Etat')->findOneByIdetat('VA');
            $currentFicheFrais->setIdetat($state);
            $em->persist($currentFicheFrais);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('rvmg_gsb_choose_month_visitor'));
    }
    
    /**
     * 
     * Function that's suppose to let follow a fichefrais
     */
    public function followAction(){
        
    }
    
    /**
     * 
     * Function that's be called when the comptable want to refuse
     * some LigneFraisHorsForfait
     */
    public function refuserHorsForfaitAction($ligne, $fichefrais){
        
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait');
        //Get lignehorsforfait which must be remove of the fichefrais
        $lignehorsforfait = $repository->findOneByIdAndIdFicheFrais($fichefrais, $ligne);
        $currentFicheFrais = $em->getRepository('rvmgGSBBundle:Fichefrais')->findOneByIdfichefrais($fichefrais);
        $visiteur = $currentFicheFrais->getIdvisiteur();
        
        if($lignehorsforfait){
            //Affect the lignehorsforfait's label to a variable and concat it to 
            // the string "REFUSE : " 
            $libelle = $lignehorsforfait->getLibelle();
            $lignehorsforfait->setLibelle("REFUSE : ".$libelle);
            
            //Try to search the next fichefrais. If it doesn't exist, we have to
            //create it with empty values (0) and put in the lignehorsforfait
            $month = new \DateTime('+1 month');
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
            $nextFicheFrais = $repository->findOneByNextMonth($visiteur, $month);
            
            //IF nextFicheFrais is empty
            if($nextFicheFrais == null){
                //Create new object
                $nextFicheFrais = new Fichefrais();
                $nextFicheFrais->setIdvisiteur($visiteur);
                $nextFicheFrais->setMois(new \DateTime('+1 month'));
                
                $em->persist($nextFicheFrais);
                $lignehorsforfait->setIdfichefrais($nextFicheFrais);
                
            }else{
                //ELSE setFichefrais of the lignehorsforfait
                $lignehorsforfait->setIdfichefrais($nextFicheFrais);
            }
            
            $em->persist($lignehorsforfait);
            $em->flush();
        }
        
        return $this->redirect($this->generateUrl('rvmg_gsb_choose_month_visitor'));
        
    }
    
}
