<?php

namespace App\Repository;

use App\Entity\Buying;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Buying>
 *
 * @method Buying|null find($id, $lockMode = null, $lockVersion = null)
 * @method Buying|null findOneBy(array $criteria, array $orderBy = null)
 * @method Buying[]    findAll()
 * @method Buying[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuyingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Buying::class);
    }

//    /**
//     * @return Buying[] Returns an array of Buying objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Buying
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
