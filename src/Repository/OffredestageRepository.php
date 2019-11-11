<?php

namespace App\Repository;

use App\Entity\Offredestage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Offredestage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offredestage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offredestage[]    findAll()
 * @method Offredestage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffredestageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offredestage::class);
    }

    // /**
    //  * @return Offredestage[] Returns an array of Offredestage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Offredestage
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
