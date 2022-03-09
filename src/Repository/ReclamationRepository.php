<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    // /**
    //  * @return Reclamation[] Returns an array of Reclamation objects
    //  */
    
    public function findById($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :val')
            ->setParameter('val', $value)
            ->orderBy('r.user', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByTypeProduct()
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.type = :val')
            ->setParameter('val', "Product")
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByTypeSoft()
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.type = :val')
            ->setParameter('val', "Coach")
            ->getQuery()
            ->getResult()
        ;
    }

  
    
   /**
    * 
    */
    public function countByType(){
        //$query = $this->createQueryBuilder('c')
            //->select('SUBSTRING(d.date, 1, 10) as date, COUNT(c) as count')
            //->groupBy('date')
        //;
        //return $query->getQuery()->getResult();
       $query = $this->getEntityManager()->createQuery("
           SELECT r.type as type, COUNT(r) as count FROM App\Entity\Reclamation r GROUP BY type
       ");
       return $query->getResult();
   }


}