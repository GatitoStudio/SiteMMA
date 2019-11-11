<?php

namespace App\Repository;

use App\Entity\Emploisdutemps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Emploisdutemps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emploisdutemps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emploisdutemps[]    findAll()
 * @method Emploisdutemps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmploisdutempsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Emploisdutemps::class);
    }

    // /**
    //  * @return Emploisdutemps[] Returns an array of Emploisdutemps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Emploisdutemps
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
