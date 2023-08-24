<?php

namespace App\Repository;

use App\Entity\SocksMatter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SocksMatter>
 *
 * @method SocksMatter|null find($id, $lockMode = null, $lockVersion = null)
 * @method SocksMatter|null findOneBy(array $criteria, array $orderBy = null)
 * @method SocksMatter[]    findAll()
 * @method SocksMatter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocksMatterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SocksMatter::class);
    }

//    /**
//     * @return SocksMatter[] Returns an array of SocksMatter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SocksMatter
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
