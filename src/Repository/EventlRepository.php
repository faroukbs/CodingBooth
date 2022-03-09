<?php

namespace App\Repository;

use App\Entity\Eventl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Eventl|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eventl|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eventl[]    findAll()
 * @method Eventl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eventl::class);
    }
    /**
     * @param $recherche
     * @return int|mixed|string
     */
    public function findByKey($recherche){
        $query = $this->createQueryBuilder('e')
            ->where('e.titre LIKE :key')
            ->setParameter('key' , '%'.$recherche.'%')->getQuery();

        return $query->getResult();
    }

    // /**
    //  * @return Eventl[] Returns an array of Eventl objects
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
    public function findOneBySomeField($value): ?Eventl
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
