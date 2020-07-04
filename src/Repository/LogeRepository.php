<?php

namespace App\Repository;

use App\Entity\Loge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Loge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Loge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Loge[]    findAll()
 * @method Loge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loge::class);
    }

    // /**
    //  * @return Loge[] Returns an array of Loge objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Loge
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
