<?php

namespace App\Repository;

use App\Entity\UserPackage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserPackage|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserPackage|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserPackage[]    findAll()
 * @method UserPackage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPackageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserPackage::class);
    }

    // /**
    //  * @return UserPackage[] Returns an array of UserPackage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserPackage
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
