<?php

namespace App\Repository;

use App\Entity\TypeFichier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeFichier|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeFichier|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeFichier[]    findAll()
 * @method TypeFichier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeFichierRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeFichier::class);
    }

    // /**
    //  * @return TypeFichier[] Returns an array of TypeFichier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeFichier
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
