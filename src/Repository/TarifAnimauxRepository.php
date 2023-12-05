<?php

namespace App\Repository;

use App\Entity\TarifAnimaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TarifAnimaux>
 *
 * @method TarifAnimaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TarifAnimaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TarifAnimaux[]    findAll()
 * @method TarifAnimaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TarifAnimauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TarifAnimaux::class);
    }

//    /**
//     * @return TarifAnimaux[] Returns an array of TarifAnimaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TarifAnimaux
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
