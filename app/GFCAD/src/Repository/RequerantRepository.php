<?php

namespace App\Repository;

use App\Entity\Requerant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Requerant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Requerant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Requerant[]    findAll()
 * @method Requerant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequerantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Requerant::class);
    }

    // /**
    //  * @return Requerant[] Returns an array of Requerant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Requerant
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
