<?php

namespace App\Repository;

use App\Entity\Contact;
use App\Entity\Equipements;
use App\Entity\Gites;
use App\Entity\Proprietaires;
use App\Entity\TarifAnimaux;
use App\Entity\TarifLocation;
use App\Model\SearchData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Knp\Component\Pager\PaginatorInterface;

use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gites>
 *
 * @method Gites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gites[]    findAll()
 * @method Gites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GitesRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gites::class);
    }



    // GitesRepository.php
    public function findAllTable()
    {
        $dql = "SELECT gite, equipement
        FROM App\Entity\Gites gite
        LEFT JOIN gite.equipement equipement
        LEFT JOIN gite.tarifLocation tarifLocation
        LEFT JOIN gite.tarifAnimaux tarifAnimaux";

        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }


    public function findByEquipementsCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('g')
            ->leftJoin('g.equipement', 'equipement')
            ->leftJoin('g.tarifLocation', 'tarifLocation')
            ->leftJoin('g.tarifAnimaux', 'tarifAnimaux');

        if (isset($criteria['laveVaisselle'])) {
            $qb->join('g.equipement', 'e')
                ->andWhere('e.laveVaisselle = :laveVaisselle')
                ->setParameter('laveVaisselle', $criteria['laveVaisselle']);
        } elseif (array_key_exists('laveLinge', $criteria)) {
            $qb->join('g.equipement', 'e')  // Utilisez la même jointure avec 'e'
                ->andWhere('e.laveLinge = :laveLinge')  // Utilisez 'e.laveLinge'
                ->setParameter('laveLinge', $criteria['laveLinge']);
        }

        // Ajoutez ici d'autres conditions basées sur les équipements
        $result =  $qb->getQuery()->getResult();
        dump($result); // Utilisez dump pour afficher les résultats dans le profiler Symfony

        return $result;
    }



    //    /**
    //     * @return Gites[] Returns an array of Gites objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('g.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Gites
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
