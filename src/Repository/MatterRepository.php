<?php

namespace App\Repository;

use App\Entity\Matter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Matter>
 *
 * @method Matter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matter[]    findAll()
 * @method Matter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matter::class);
    }

//    /**
//     * @return Matter[] Returns an array of Matter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Matter
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
