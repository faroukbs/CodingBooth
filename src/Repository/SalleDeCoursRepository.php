<?php

namespace App\Repository;

use App\Entity\SalleDeCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SalleDeCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalleDeCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalleDeCours[]    findAll()
 * @method SalleDeCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalleDeCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SalleDeCours::class);
    }

    // /**
    //  * @return SalleDeCours[] Returns an array of SalleDeCours objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SalleDeCours
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
