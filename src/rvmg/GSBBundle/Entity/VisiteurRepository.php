<?php

namespace rvmg\GSBBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * VisiteurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VisiteurRepository extends EntityRepository
{
    
    public function findByMdpAndLogin($login, $mdp){
        
        $queryBuilder = $this->createQueryBuilder('v');
        $queryBuilder->where('v.login = :login')->setParameter('login',$login)->andWhere('v.mdp = :mdp')->setParameter('mdp', $mdp);
        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
    
    public function updateConnecteToTrue($login){
        
        $qB = $this->getEntityManager()->createQueryBuilder();
        $qB ->update('rvmgGSBBundle:Visiteur', 'v')
            ->set('v.connecte', 1)
            ->where('v.login = :login')
            ->setParameter('login' ,$login);
         
        $qB->getQuery()->execute();
    }
    
    public function updateConnecteToFalse($login){
        
        $qB = $this->getEntityManager()->createQueryBuilder();
        $qB ->update('rvmgGSBBundle:Visiteur', 'v')
            ->set('v.connecte', 0)
            ->where('v.login = :login')
            ->setParameter('login' ,$login);
         
        $qB->getQuery()->execute();
    }
    
    public function findByComptable($comptable){
        
        $queryBuilder = $this->createQueryBuilder('v');
        $queryBuilder->where('v.idcomptable = :comptable')->setParameter(':comptable', $comptable);
        
        //Return only the queryBuilder for the custom form ChooseMonthAndVisitorType
        return $queryBuilder;
        
    }
    
    public function changeMdp($mdp){
        
        $queryBuilder = $this->createQueryBuilder('v');
        $queryBuilder->where('v.mdp = :mdp')->setParameter(':mdp', $mdp);
        
        return $queryBuilder;
        
    }
}
