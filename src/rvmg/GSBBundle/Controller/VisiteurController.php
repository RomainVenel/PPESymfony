<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Form\LignefraisforfaitType;
use rvmg\GSBBundle\Form\LignefraishorsforfaitType;
use rvmg\GSBBundle\Entity\Lignefraisforfait;
use rvmg\GSBBundle\Entity\Lignefraishorsforfait;
use rvmg\GSBBundle\Entity\Fichefrais;
use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use rvmg\GSBBundle\Formulaires\Type\ChooseMonthAndVisitorType;
use rvmg\GSBBundle\Formulaires\Data\ChangeMdpClass;
use rvmg\GSBBundle\Formulaires\Type\ChangeMdpType;

/**
 * Description of VisiteurController
 *
 * @author eleve
 */
class VisiteurController extends Controller{
    
    /**
     *  
     * @return type View
     * 
     * Function which allow to add new LigneForfait to the current FicheFrais
     * Try to found the fiche that's like the current date. In fact it's empty 
     * we add a new FicheFrais, otherwise we get the fiche and set the LigneFrais's 
     * idFicheFrais with it.
     */
    public function renseignerForfaitAction($id){
        
        //Get the Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        
        //Initiate the Ligne
        $ligneForfaitForm = new Lignefraisforfait();
        //Create the form with the object
        $form = $this->createForm(new LignefraisforfaitType(), $ligneForfaitForm);

        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        //Get the logged visitor from the database
        $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                    ->findOneBy(array('idvisiteur'=>$this->getRequest()->getSession()->get('user_id')
                ));
        
        //Initiate the current date in a variable
        $now = new \DateTime();
        
        //Make a second variable to get the currentMonth
        $currentMonth = new \DateTime();
        $currentMonth->setDate($now->format('Y'), $now->format('m'), 1);

        //Try to find a FicheFrais with visitor and currentMonth past in params
        $fichefrais = $em->getRepository('rvmgGSBBundle:FicheFrais')
                ->findOneBy(array('idvisiteur'=>$visiteur,
                    'mois'=>$currentMonth));
        
        //IF the fiche is not empty
        if($fichefrais){
            //We retrieve all the ligne which correspond to that fiche
            $lignesFraisForfait = $em->getRepository('rvmgGSBBundle:lignefraisforfait')
                ->findBy(array('idfichefrais'=>$fichefrais));
        }
        //ELSE
        else{
            //Affect NULL value to the variable
            $lignesFraisForfait = null;
        }
               
        //IF the form is valid
        if($form->isValid()){
            
            //IF the fichefrais is empty
            if(!$fichefrais){
                
                /*
                 * Affect the result of the call to the function creerFicheFrais
                 * to the variable fichefrais
                 */
                $fichefrais = $this->creerFicheFrais($visiteur, $currentMonth, $now);
                
                //Set the idFicheFrais of the ligneFraisForfait get from the form
                $ligneForfaitForm->setIdfichefrais($fichefrais);
                
                //Persist the object
                $this->getDoctrine()->getManager()->persist($ligneForfaitForm);
                
                //Flush it
                $em->flush();
                
                $id = $ligneForfaitForm->getIdlignefraisforfait();
                
                //Redirect the user to the form, that  allows to refresh the table
                return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait', array('id'=>$id)));
                
            }
            //ELSE
            else{
                
                //Try to find a ligne from the FicheFrais that has the same idForfait
                $ligneFrais = $em->getRepository('rvmgGSBBundle:Lignefraisforfait')
                        ->findOneBy(array('idfichefrais' =>$fichefrais,
                            'idfraisforfait'=>$ligneForfaitForm->getIdfraisforfait()));
                
                //IF ligneFrais is empty
                if(!$ligneFrais){
                    
                    //Just set the idFicheFrais of it
                    $ligneForfaitForm->setIdfichefrais($fichefrais);
                    
                    //And persist
                    $em->persist($ligneForfaitForm);
                    
                    $em->flush();
                    
                    $id = $ligneForfaitForm->getIdlignefraisforfait();
                    
                }
                //ELSE
                else{
                    
                    //Get the quantite of the ligne
                    $quantite = $ligneForfaitForm->getQuantite();
                    //Update it with the value pick by the user
                    $ligneFrais->setQuantite($quantite);
                    
                    //Persist
                    $em->persist($ligneFrais);
                    
                    $em->flush();
                    
                    $id = $ligneFrais->getIdlignefraisforfait();
                    
                }
               
                //Redirect the user to the form, that  allows to refresh the table
                return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait', array('id'=>$id)));
            }  
        }
        
        //Render the form that allows the user to add new ligne and render a table
        //of all FicheFrais's ligneFraisForfait
        return $this->render('rvmgGSBBundle:Visiteur:renseignerForfait.html.twig'
                , array('form'=>$form->createView(),
                    'lignesFraisForfait'=>$lignesFraisForfait,
                    'idLigne'=>$id));
    }
    
    /**
     * 
     * @return type
     * 
     * Function that allows to add new LigneHorsForfait. We try to find the 
     * current fiche, if it not exists we create it and add the ligne get from 
     * the form to the fiche.
     */
    public function renseignerHorsForfaitAction($id){
        
        //Get the Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        
        //Initiate new LigneFraisHorsForfait
        $ligneHorsForfaitForm = new Lignefraishorsforfait();
        //Create the form with the object
        $form = $this->createForm(new LignefraishorsforfaitType(), $ligneHorsForfaitForm);
        
        //Get the logged visitor
        $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                    ->findOneBy(array('idvisiteur'=>$this->getRequest()->getSession()->get('user_id')
                ));
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        //Add variable with the current date
        $now = new \DateTime();
        //Get the month
        $currentMonth = new \DateTime();
        $currentMonth->setDate($now->format('Y'), $now->format('m'), 1);

        //Try to find the FicheFrais
        $fichefrais = $em->getRepository('rvmgGSBBundle:FicheFrais')
                ->findOneBy(array('idvisiteur'=>$visiteur,
                    'mois'=>$currentMonth)); 
        
        //IF the fiche exists
        if($fichefrais){
            //Get all the ligneHorsForfait whith the ficheFrais's ID past in params
            $lignesFraisHorsForfait = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait')
                ->findBy(array('idfichefrais'=>$fichefrais));
        }
        //ELSE
        else{
            //Set the variable to NULL
            $lignesFraisHorsForfait = null;
        }
        
        //IF the form is valid
        if($form->isValid()){
            //IF there's not fiche
            if(!$fichefrais){
                
                //Juste create it with the function creerFicheFrais
                $fichefrais = $this->creerFicheFrais($visiteur, $currentMonth, $now);
                //And set the ID to the ligne
                $ligneHorsForfaitForm->setIdfichefrais($fichefrais);
                
            }
            //ELSE
            else{
                
                //Only set idFichefrais of the ligne
                $ligneHorsForfaitForm->setIdfichefrais($fichefrais);
                
            }
            
            //Persist and flush 
            $em->persist($ligneHorsForfaitForm);
            $em->flush();
            
            $id = $ligneHorsForfaitForm->getIdlignefraishorsforfait();
            
            //Redirect the user to refresh the table
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_horsforfait', array('id'=>$id)));
        }
        
        //Render the form and the table
        return $this->render('rvmgGSBBundle:Visiteur:renseignerHorsForfait.html.twig'
                , array('form'=>$form->createView(),
                    'lignesFraisHorsForfait'=>$lignesFraisHorsForfait,
                    'idLigne'=>$id));
    }
    
    /**
     * 
     * @return type
     * 
     * Method of the UC Consulter une fiche de frais
     * Get the month selected by the user, and get the fiche from the database
     * Then, display it to the user with the fiche data and all it's lines
     */
    public function consulterAction(){
        
        //Get the Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        
        //Get the logged visitor
        $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                    ->findOneBy(array('idvisiteur'=>$this->getRequest()->getSession()->get('user_id')
                ));
        $comptable = $visiteur->getIdcomptable();
        
        //used the same form than comptable but hide the visitor's field 
        $choose = new ChooseMonthAndVisitorClass();
        //Temporaire le temps de trouver une alternative
        $form = $this->createForm(new ChooseMonthAndVisitorType($comptable),$choose);        
        
        $request = $this->container->get('request');
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $month = $choose->getMonth();
            
            //Try to find a Fichefrais
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
            $fichefrais = $repository->findOneByMonthAndVisitor($visiteur, $month);
            //If $fichefrais is empty, display a message at the user to inform him
            //that's there's no fichefrais for this month
            if(!$fichefrais){
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Vous n\'avez pas de fiche de frais pour ce mois.');
                return $this->render('rvmgGSBBundle:Visiteur:chooseMonth.html.twig',
                        array('form'=>$form->createView()));
            }
            
            //In the other case, we search all Lignefraisforfait and Lignefraishorsforfait
            //to display them 
            else{
                
                //Put the ligne into the variable
                $tableForfait = $this->getLignes($fichefrais);
                
                //Return the view
                return $this->render('rvmgGSBBundle:Visiteur:displayFicheFrais.html.twig',
                        array('tableForfait'=>$tableForfait, 'fichefrais'=>$fichefrais));
                
            }  
            
        }
        
        //Render the form
        return $this->render('rvmgGSBBundle:Visiteur:chooseMonth.html.twig', 
                array('form'=>$form->createView()));
        
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
        
        //Get the Doctrine Manager
        $em = $this->getDoctrine()->getEntityManager();
        
        //Get the different repository
        $repositoryForfait = $em->getRepository('rvmgGSBBundle:Lignefraisforfait');
        $repositoryHorsForfait = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait');

        //Retrieve the corresponding lignes
        $listLigneForfait = $repositoryForfait->findByIdfichefrais($fichefrais);
        $listLigneHorsForfait = $repositoryHorsForfait->findByIdfichefrais($fichefrais);

        //Put these lignes into variable
        $tableForfait = array(array("name"=>"Frais forfait",
            "listForfait"=>$listLigneForfait,
            "type"=>"forfait"),
            array("name"=>"Frais hors forfait",
                "listForfait"=>$listLigneHorsForfait,
                "type"=>"horsforfait"));
        
        //Return the variable
        return $tableForfait;
        
    }
    
    /**
     * 
     * @param type $visiteur connected Visitor
     * @param type $currentMonth current month and year
     * @param type $now current date
     * @return type FicheFrais
     * 
     * Function to create a new FicheFrais
     */
    public function creerFicheFrais($visiteur,$currentMonth, $now){
        
        //Get Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        
        //Initiate FicheFrais and differents properties
        $fichefrais = new Fichefrais();
        $fichefrais->setIdvisiteur($visiteur);
        $fichefrais->setMontantvalide(0);
        $fichefrais->setNbjustificatifs(0);
        $fichefrais->setMois($currentMonth);
        $fichefrais->setDatemodif($now);
        //Get the state from database and define the fichefrais's state
        $state = $em->getRepository('rvmgGSBBundle:Etat')->findOneByIdetat('CR');
        $fichefrais->setIdetat($state);

        //Persist and flush
        $em->persist($fichefrais);
        $em->flush();

        /*      COMMENTE POUR TEST
        //Get the fichefrais which was just create
        $fichefrais = $em->getRepository('rvmgGSBBundle:FicheFrais')
            ->findOneBy(array('idvisiteur'=>$visiteur,
                'mois'=>$currentMonth));
        */

        //Return it
        return $fichefrais;
        
    }
    
    public function changeMDPAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $changeMdpForm = new ChangeMdpClass();

        $form = $this->createForm(new ChangeMdpType(), $changeMdpForm);

        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                    ->findOneBy(array('idvisiteur'=>$this->getRequest()->getSession()->get('user_id')));
            
            $ancienMdp = ($form["ancienMdp"]->getData());
            $nouveauMdp = ($form["nouveauMdp"]->getData());
            
            if($ancienMdp == $visiteur->getMdp()){

                $visiteur->setMdp(($nouveauMdp));

                $em->persist($visiteur);
                $em->flush();
                
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Changement de mot de passe effectué');
                return $this->render('rvmgGSBBundle:Visiteur:changeMdp.html.twig', array('form'=>$form->createView()));
             
            }else{
             
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Ancien mot de passe incorrect');
                return $this->render('rvmgGSBBundle:Visiteur:changeMdp.html.twig', array('form'=>$form->createView()));
            }
        }
            
        return $this->render('rvmgGSBBundle:Visiteur:changeMdp.html.twig', array('form'=>$form->createView()));
    }
                   
    /**
     * 
     * @param type $id Ligne's ID
     * @return type
     * 
     * Function to delete the ligne that was add 
     */
    public function annulerForfaitAction($id){
        
        $request = $this->container->get('request');
        if($id == -1){
            $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Vous n\'avez pas encore ajouté de frais pour cette session.');
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait'));
        }else{
            
            $em = $this->getDoctrine()->getManager();
            $ligne = $em->getRepository('rvmgGSBBundle:Lignefraisforfait')
                    ->findOneByIdlignefraisforfait($id);
            $quantite = $ligne->getQuantite()-1;
            $ligne->setQuantite($quantite);
            $em->persist($ligne);
            $em->flush();
            
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait'));
        }
        
    }
    
    /**
     * 
     * @return type
     * 
     * Function to clear the fichefrais 
     */
    public function supprimerForfaitAction($id){
        
        $request = $this->container->get('request');
        if($id == -1){
            $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Vous n\'avez pas encore ajouté de frais pour cette session.');
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait'));
        }else{
            
            $em = $this->getDoctrine()->getManager();
            $ligne = $em->getRepository('rvmgGSBBundle:Lignefraisforfait')
                    ->findOneByIdlignefraisforfait($id);
            $em->remove($ligne);
            $em->flush();
            
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait'));
        }
       
    }
    
    /**
     * 
     * @param type $id ligne just has been add
     * @return type
     * 
     * Function allows to delete the ligne that was just add
     */
    public function annulerHorsForfaitAction($id){
        
        $request = $this->container->get('request');
        if($id == -1){
            $request->getSession()
                    ->getFlashBag()
                    ->add('error', 'Vous n\'avez pas encore ajouté de frais pour cette session.');
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_horsforfait'));
        }else{
            
            $em = $this->getDoctrine()->getManager();
            $ligne = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait')
                    ->findOneByIdlignefraishorsforfait($id);
            $em->remove($ligne);
            $em->flush();
            
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_horsforfait'));
        }
    }
    
}
    