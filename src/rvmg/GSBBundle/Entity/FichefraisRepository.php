<?php

namespace rvmg\GSBBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FichefraisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FichefraisRepository extends EntityRepository
{
    
    public function findOneByCurrentMonth($visiteur,$mois){
        
        $queryBuilder = $this->createQueryBuilder('f');
        $queryBuilder->where('f.idvisiteur = :visiteur')->setParameter(':visiteur', $visiteur)
                ->andWhere('f.mois = :month')->setParameter(':month', $month);
        
        return $queryBuilder->getQuery()->getOneOrNullResult();
        
    }
    
    public function findOneByNextMonth($visiteur,$month){
        $queryBuilder = $this->createQueryBuilder('f');
        $queryBuilder->where('f.idvisiteur = :visiteur')->setParameter(':visiteur', $visiteur)
                ->andWhere('f.mois = :month')->setParameter(':month', $month);
        
        return $queryBuilder->getQuery()->getOneOrNullResult();
       
    }
    
    public function findOneByMonthAndVisitor($visitor, $month){
        $queryBuilder = $this->createQueryBuilder('f');
        $queryBuilder->where('f.idvisiteur = :visiteur')->setParameter(':visiteur', $visitor)
                ->andWhere('f.mois = :mois')->setParameter(':mois',$month);

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
    
    public function findByStateAndVisitor($state, $visitors){
        
        $queryBuilder = $this->createQueryBuilder('f');
        $queryBuilder->where('f.idetat = :state')->setParameter(':state', $state)
                ->andWhere('f.idvisiteur IN (:visitors)')->setParameter(':visitors', $visitors);
        
        //Only return the queryBuilder for the form
        return $queryBuilder;
    }
    
}
