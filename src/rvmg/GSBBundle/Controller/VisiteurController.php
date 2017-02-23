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
/**
 * Description of VisiteurController
 *
 * @author eleve
 */
class VisiteurController extends Controller{
    
    public function renseignerForfaitAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $ligneForfaitForm = new Lignefraisforfait();
        $form = $this->createForm(new LignefraisforfaitType(), $ligneForfaitForm);

        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                    ->findOneBy(array('idvisiteur'=>$this->getRequest()->getSession()->get('user_id')
                ));
        
        $now = new \DateTime();
        $currentMonth = new \DateTime();
        $currentMonth->setDate($now->format('Y'), $now->format('m'), 1);

        $fichefrais = $em->getRepository('rvmgGSBBundle:FicheFrais')
                ->findOneBy(array('idvisiteur'=>$visiteur,
                    'mois'=>$currentMonth));    
        
        if($fichefrais){
            $lignesFraisForfait = $em->getRepository('rvmgGSBBundle:lignefraisforfait')
                ->findBy(array('idfichefrais'=>$fichefrais));
        }else{
            $lignesFraisForfait = null;
        }
        
        if($form->isValid()){
            
            if(!$fichefrais){
                
                $fichefrais = $this->creerFicheFrais($visiteur, $currentMonth, $now);
                
                $ligneForfaitForm->setIdfichefrais($fichefrais);
                $this->getDoctrine()->getManager()->persist($ligneForfaitForm);
            }else{
                
                $ligneFrais = $em->getRepository('rvmgGSBBundle:Lignefraisforfait')
                        ->findOneBy(array('idfichefrais' =>$fichefrais,
                            'idfraisforfait'=>$ligneForfaitForm->getIdfraisforfait()));
                
                if(!$ligneFrais){
                    $ligneForfaitForm->setIdfichefrais($fichefrais);
                    $em->persist($ligneForfaitForm);
                }else{
                    $quantite = $ligneForfaitForm->getQuantite();
                    $ligneFrais->setQuantite($quantite);
                    
                    $em->persist($ligneFrais);
                }
                
                
                $em->flush();
                return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_forfait'));
            }  
        }
        
        /* On envoie dans la vue le paramètre frais qui contient tous les frais forfait */
        return $this->render('rvmgGSBBundle:Visiteur:renseignerForfait.html.twig'
                , array('form'=>$form->createView(),
                    'lignesFraisForfait'=>$lignesFraisForfait));
    }
    
    public function renseignerHorsForfaitAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $ligneHorsForfaitForm = new Lignefraishorsforfait();
        $form = $this->createForm(new LignefraishorsforfaitType(), $ligneHorsForfaitForm);
        
        $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                    ->findOneBy(array('idvisiteur'=>$this->getRequest()->getSession()->get('user_id')
                ));
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        $now = new \DateTime();
        $currentMonth = new \DateTime();
        $currentMonth->setDate($now->format('Y'), $now->format('m'), 1);

        $fichefrais = $em->getRepository('rvmgGSBBundle:FicheFrais')
                ->findOneBy(array('idvisiteur'=>$visiteur,
                    'mois'=>$currentMonth)); 
        
        if($fichefrais){
            $lignesFraisHorsForfait = $em->getRepository('rvmgGSBBundle:lignefraishorsforfait')
                ->findBy(array('idfichefrais'=>$fichefrais));
        }else{
            $lignesFraisHorsForfait = null;
        }
        
        if($form->isValid()){
            if(!$fichefrais){
                $fichefrais = $this->creerFicheFrais($visiteur, $currentMonth, $now);
                $ligneHorsForfaitForm->setIdfichefrais($fichefrais);
            }else{
                $ligneHorsForfaitForm->setIdfichefrais($fichefrais);
            }
            
            $em->persist($ligneHorsForfaitForm);
            $em->flush();
            
            return $this->redirect($this->generateUrl('rvmg_gsb_renseigner_horsforfait'));
        }
        
        return $this->render('rvmgGSBBundle:Visiteur:renseignerHorsForfait.html.twig'
                , array('form'=>$form->createView(),
                    'lignesFraisHorsForfait'=>$lignesFraisHorsForfait));
    }
    
    /**
     * 
     * @return type
     * 
     * Method of the UC Consulter une fiche de frais
     * 
     * Get the month selected by the user, and get the fiche from the database
     * 
     * Then, display it to the user with the fiche data and all it's lines
     */
    public function consulterAction(){
        
        $em = $this->getDoctrine()->getManager();
        $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')
                ->findOneByIdvisiteur($this->getRequest()->getSession()->get('user_id'));
        $comptable = $visiteur->getIdComptable();
        
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
                
                $repositoryForfait = $em->getRepository('rvmgGSBBundle:Lignefraisforfait');
                $repositoryHorsForfait = $em->getRepository('rvmgGSBBundle:Lignefraishorsforfait');
                
                $listLigneForfait = $repositoryForfait->findByIdfichefrais($fichefrais);
                $listLigneHorsForfait = $repositoryHorsForfait->findByIdfichefrais($fichefrais);
                
                $tableForfait = $this->getLignes($fichefrais);
                
                return $this->render('rvmgGSBBundle:Visiteur:displayFicheFrais.html.twig',
                        array('tableForfait'=>$tableForfait, 'fichefrais'=>$fichefrais));
                
            }  
            
        }
        
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
    
    public function creerFicheFrais($visiteur,$currentMonth, $now){
        
        $fichefrais = new Fichefrais();
        $fichefrais->setIdvisiteur($visiteur);
        $fichefrais->setMontantvalide(0);
        $fichefrais->setNbjustificatifs(0);
        $fichefrais->setMois($currentMonth);
        $fichefrais->setDatemodif($now);
        $state = $em->getRepository('rvmgGSBBundle:Etat')->findOneByIdetat('CR');
        $fichefrais->setIdetat($state);

        $this->getDoctrine()->getManager()->persist($fichefrais);
        $this->getDoctrine()->getManager()->flush();

        $fichefrais = $em->getRepository('rvmgGSBBundle:FicheFrais')
            ->findOneBy(array('idvisiteur'=>$visiteur,
                'mois'=>$currentMonth));

        return $fichefrais;
        
    }
    
}
    