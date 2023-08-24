<?php

namespace App\Repository;

use App\Entity\Socks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Socks>
 *
 * @method Socks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Socks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Socks[]    findAll()
 * @method Socks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Socks::class);
    }

//    /**
//     * @return Socks[] Returns an array of Socks objects
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

//    public function findOneBySomeField($value): ?Socks
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
