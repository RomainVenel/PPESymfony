<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use rvmg\GSBBundle\Formulaires\Type\ChooseMonthAndVisitorType;
use rvmg\GSBBundle\Formulaires\Data\FollowClass;
use rvmg\GSBBundle\Formulaires\Type\FollowType;
use rvmg\GSBBundle\Entity\Fichefrais;
use rvmg\GSBBundle\Entity\Comptable;
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

        //Get the current log in comptable
        $em = $this->getDoctrine()->getManager();
        $comptable = $em->getRepository('rvmgGSBBundle:Comptable')
                ->findOneByIdcomptable($this->getRequest()->getSession()->get('user_id'));
        
        $choose = new ChooseMonthAndVisitorClass();
        //Form's construct get only the visistors of the comptable
        $form = $this->createForm(new ChooseMonthAndVisitorType($comptable),$choose);        
        
        $request = $this->container->get('request');
        
        $form->handleRequest($request);
        
        if ($form->isValid()){
            $visitor = $choose->getVisitor();
            $month = $choose->getMonth();
            //Try to find a Fichefrais
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
            $fichefrais = $repository->findOneByMonthAndVisitorAndState($visitor, $month);
            //If $fichefrais is empty, display a message at the user to inform him
            //that's there's no fichefrais for this month and visitor
            if(!$fichefrais){
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Il n\'y a pas de fiche de frais pour ce visiteur ce mois.');
                return $this->render('rvmgGSBBundle:Comptable:chooseMonthAndVisitor.html.twig',
                        array('form'=>$form->createView()));
            }
            //Check if the fiche was not validate yet
            elseif($fichefrais->getIdetat()->getIdetat() == "VA"){
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'La fiche de frais pour ce mois et ce visiteur a déjà été validée.');
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
                
                $tableForfait = $this->getLignes($fichefrais);
                
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
        
        //get the current fiche
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
        $currentFicheFrais = $repository->findOneByIdfichefrais($fichefrais);
        //get the current date
        $currentDate = new \DateTime();
        
        //IF the current fiche is not empty
        if($currentFicheFrais){
            
            //initialize the variable to 0
            $montant = 0;
            $nbJustificatifs = 0;
            $frais = $this->getLignes($currentFicheFrais);
            
            /*
             * foreach frais which the type is forfait or hors forfait,
             * get the amount and add it to the variable $montant
             * 
             * also increase $nbJustificatifs of one
             */
            foreach($frais as $oneFrais){
                
                if($oneFrais["type"]== "forfait"){
                    
                    foreach($oneFrais['listForfait'] as $oneLine){
                        
                        //Increase montant with amount of frais multiply by forfait price
                        $montant = $montant 
                                + ($oneLine->getIdfraisforfait()->getMontant()
                                * $oneLine->getQuantite());
                        //Increase 
                        $nbJustificatifs++;
                        
                    }
                }else{
                    foreach($oneFrais['listForfait'] as $oneLine){
                        //Increase amount of justificatif and cost amount
                        $montant = $montant + $oneLine->getMontant();
                        $nbJustificatifs++;
                        
                    }
                }
                
            }
            
            //set the values define before and affect these to the current fiche
            $state = $em->getRepository('rvmgGSBBundle:Etat')->findOneByIdetat('VA');
            $currentFicheFrais->setIdetat($state);
            $currentFicheFrais->setDatemodif($currentDate);
            $currentFicheFrais->setMontantvalide($montant);
            $currentFicheFrais->setNbjustificatifs($nbJustificatifs);
            $em->persist($currentFicheFrais);
        }
        //then, flush all inside database
        $em->flush();
        return $this->redirect($this->generateUrl('rvmg_gsb_choose_month_visitor'));

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
            
            //Create new date to get next month
            $currentDate = new \DateTime();
            $month = new \DateTime();
            $month->setDate($currentDate->format('Y'), $currentDate->format('m')+1, 1);
            //Try to search the next fichefrais. If it doesn't exist, we have to
            //create it with empty values (0) and put in the lignehorsforfait
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
            //TODO Regarder la requête du repository l'utiliser
            //$nextFicheFrais = $repository->findOneByNextMonth($visiteur,$month);
            $nextFicheFrais = $repository->findOneBy(array('mois'=>$month,'idvisiteur'=>$visiteur));
            //IF nextFicheFrais is empty
           if(!$nextFicheFrais){
                
                //Create new object
                $nextFicheFrais = new Fichefrais();
                $nextFicheFrais->setIdvisiteur($visiteur);
                $nextFicheFrais->setMois($month);
                $etat = $em->getRepository('rvmgGSBBundle:Etat')->findOneByIdetat('CR');
                $nextFicheFrais->setIdetat($etat);
                $nextFicheFrais->setMontantvalide(0);
                $nextFicheFrais->setNbjustificatifs(0);
                
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
    
    /**
     * 
     * Function that's suppose to let choose a fichefrais
     */

    public function chooseFicheFraisAction(){
        
        //Get the visitor
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('rvmgGSBBundle:Visiteur');
        $visitors = $repository->findBy(array('idcomptable'=>
            $this->getRequest()->getSession()->get('user_id')));
        
        //Find fichefrais which the state is "VA"
        $repository = $em->getRepository('rvmgGSBBundle:Etat');
        $state = $repository->findOneBy(array('idetat'=>'VA')); 
        
        $fichefrais = $em->getRepository('rvmgGSBBundle:Fichefrais')
                ->isExistFicheFrais($state, $visitors);
        
        //IF $fichefrais is empty
        if(!$fichefrais){
            
            //Display a message to the user to inform him there is no fiche to put in remboursement
            $this->getRequest()->getSession()
                    ->getFlashBag()
                    ->add('error', 'Il n\'y a pas de fiche de frais à mettre en remboursement actuellement.');
                return $this->render('rvmgGSBBundle:Comptable:accueilComptable.html.twig');
            
        }else{
        
            $follow = new FollowClass();
            //Form's construct get only the visistors of the comptable with the state 'VA'
            $followType = new FollowType($visitors, $state);
            $form = $this->createForm($followType,$follow);      
            $request = $this->container->get('request');

            $form->handleRequest($request);

            if ($form->isValid()){

                //get the fichefrais
                $fichefrais = $follow->getFichefrais();

                //get all the lines of the fiche
                $repositoryForfait = $em->getRepository('rvmgGSBBundle:Lignefraisforfait');
                $repositoryHorsForfait = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait');

                $listLigneForfait = $repositoryForfait->findByIdfichefrais($fichefrais);
                $listLigneHorsForfait = $repositoryHorsForfait->findByIdfichefrais($fichefrais);

                //Put these into a variable
                $tableForfait = array(array("name"=>"Frais forfait",
                    "listForfait"=>$listLigneForfait,
                    "type"=>"forfait"),
                    array("name"=>"Frais hors forfait",
                        "listForfait"=>$listLigneHorsForfait,
                        "type"=>"horsforfait"));

                return $this->render('rvmgGSBBundle:Comptable:followFicheFrais.html.twig',
                            array('tableForfait'=>$tableForfait));
            }
        }
        
        return $this->render('rvmgGSBBundle:Comptable:chooseFicheFrais.html.twig', 
                array('form'=>$form->createView()));
        
    }
    
    /**
     * 
     * @param type $fichefrais
     * @return type
     * 
     * this method allows to change the state of the fiche to RB
     */
    public function followAction($fichefrais){
        
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
        //Find current fiche
        $currentFicheFrais = $repository->findOneByIdfichefrais($fichefrais);
        $currentDate = new \DateTime();
        if($currentFicheFrais){
            //Set state to RB
            $state = $em->getRepository('rvmgGSBBundle:Etat')->findOneByIdetat('RB');
            $currentFicheFrais->setIdetat($state);
            $currentFicheFrais->setDatemodif($currentDate);
            $em->persist($currentFicheFrais);
            
        }
        $em->flush();
        
        return $this->redirect($this->generateUrl('rvmg_gsb_choose_fiche_frais'));
        //TODO Lorsque le comptable valide la fiche de frais, envoyer une notification à l'application mobile
        //External link
        
    }
    
    /**
     * 
     * @param type $fichefrais
     * @return array array of fichefrais's lines
     * 
     * Function which is suppose to return the lines of the fichefrais
     * gived in argument
     */
    public function getLignes($fichefrais){
        
        //Retrieve all lines of fichefrais
        $em = $this->getDoctrine()->getEntityManager();
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
        
        return $tableForfait;
        
    }
    
}
