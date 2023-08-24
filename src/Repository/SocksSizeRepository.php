<?php

namespace App\Repository;

use App\Entity\SocksSize;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SocksSize>
 *
 * @method SocksSize|null find($id, $lockMode = null, $lockVersion = null)
 * @method SocksSize|null findOneBy(array $criteria, array $orderBy = null)
 * @method SocksSize[]    findAll()
 * @method SocksSize[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocksSizeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SocksSize::class);
    }

//    /**
//     * @return SocksSize[] Returns an array of SocksSize objects
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

//    public function findOneBySomeField($value): ?SocksSize
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
