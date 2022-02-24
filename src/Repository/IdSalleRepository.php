<?php

namespace App\Repository;

use App\Entity\IdSalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IdSalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdSalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdSalle[]    findAll()
 * @method IdSalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdSalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdSalle::class);
    }

    // /**
    //  * @return IdSalle[] Returns an array of IdSalle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IdSalle
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
