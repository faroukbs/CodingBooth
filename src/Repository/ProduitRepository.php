<?php
namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    


    public function findEntitiesByString($term){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM App:Produit p WHERE p.nomprod LIKE :str or p.image LIKE :str or p.prix LIKE :str or  p.quantity LIKE :str'
            )
            ->setParameter('str', '%'.$term.'%')
            ->getResult();
    }


    

}