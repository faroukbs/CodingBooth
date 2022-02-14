<?php

namespace App\Repository;

use App\Entity\CategoriesCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoriesCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesCours[]    findAll()
 * @method CategoriesCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoriesCours::class);
    }

    // /**
    //  * @return CategoriesCours[] Returns an array of CategoriesCours objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoriesCours
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
