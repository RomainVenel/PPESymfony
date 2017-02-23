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
        
        // Récupération de tous les frais forfait 
        $fraisForfait = $em->getRepository('rvmgGSBBundle:Fraisforfait')->findAll();
        
        // Si le formulaire s'est bien envoyée 
        if($request->getMethod() == 'POST'){
            
            // On récupère la date sous le format 'Année-Mois-Jour' 
            $currentDate = new \DateTime();
            $mois = $currentDate->format('Y-m-d');
            
            // On récupère le visiteur dont la session est ouverte 
            $visiteur = $em->getRepository('rvmgGSBBundle:Visiteur')->findOneByIdvisiteur($this->getRequest()->getSession()->get('user_id'));
            
            // Fiche frais du visiteur pour le mois donné 
            $repository = $em->getRepository('rvmgGSBBundle:Fichefrais');
            $ficheFrais = $repository->findOneByCurrentMonth($visiteur, $mois);
            
            //if(!is_null($ficheFrais)){echo 'ALERTE ROUGE';}
            
            $repositoryForfait = $em->getRepository('rvmgGSBBundle:Lignefraisforfait');
            
            // Si la fiche de frais existe pour ce visiteur
            if($repositoryForfait->findByIdfichefrais($ficheFrais)){
                
                $listLigneForfait = $repositoryForfait->findByIdfichefrais($ficheFrais);

                // On récupère les données du formulaire des frais forfait
                $quantiteETP = $_POST['ETP'];
                $quantiteKM = $_POST['KM'];
                $quantiteNUI = $_POST['NUI'];
                $quantiteREP = $_POST['REP'];
                
                // On initialise la variable $i à 0
                $i = 0;

                /* Pour chaque ligne, on regarde si le visiteur a rentré une quantité
                 * et si elle est numérique. Si oui, la donnée est persistée,
                 * sinon on passe à la ligne suivante
                 */
                foreach ($listLigneForfait as $uneLigne){

                    if ($i == 0){

                        if (is_numeric($quantiteETP)){
                            $libelle = $_POST['libETP'];
                            $uneLigne->setQuantite($quantiteETP);
                        }else{
                            echo 'Erreur';
                        }

                        $em->persist($ficheFrais);
                        $em->persist($uneLigne);


                    }else if($i == 1){

                        if (is_numeric($quantiteKM)){
                            $libelle = $_POST['libKM'];
                            $uneLigne->setQuantite($quantiteKM);
                        }

                        $em->persist($ficheFrais);
                        $em->persist($uneLigne);


                    }else if($i == 2){

                        if (is_numeric($quantiteNUI)){
                            $libelle = $_POST['libNUI'];
                            $uneLigne->setQuantite($quantiteNUI);
                        }

                        $em->persist($ficheFrais);
                        $em->persist($uneLigne);


                    }else{

                        if (is_numeric($quantiteREP)){
                            $libelle = $_POST['libREP'];
                            $uneLigne->setQuantite($quantiteREP);
                        }

                        $em->persist($ficheFrais);
                        $em->persist($uneLigne);


                    }

                    $i++;
                }

                $em->flush();

                die("C'est fait !");
            
            // Si la fiche de frais n'existe pas, on la crée
            }else{
                
                
                
            }
            
        }
        
        /* On envoie dans la vue le paramètre frais qui contient tous les frais forfait */
        return $this->render($vue, array('frais'=>$fraisForfait, 'form'=>$form->createView()));
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
        $comptable = $em->getRepository('rvmgGSBBundle:Comptable')
                ->findOneByIdcomptable($visiteur->getIdcomptable());
        
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
    
}
    