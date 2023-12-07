<?php

namespace App\Repository;


use App\Entity\Gites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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

        $queryBuilder = $this->createQueryBuilder('g')
            ->leftJoin('g.equipement', 'e')
            ->leftJoin('g.tarifLocation', 'tl');


        $equipments = [
            'laveLinge', 'laveVaiselle', 'climatisation', 'television',
            'terrasse', 'bbq', 'piscinePrivee', 'piscinePublic',
            'pingPong', 'tennis'
        ];

        foreach ($equipments as $equipment) {
            if (!empty($criteria[$equipment])) {
                $queryBuilder->andWhere("e.$equipment = :$equipment")
                    ->setParameter($equipment, true);
            }
        }

        
            if (!empty($criteria['localisation'])) {
                $queryBuilder->andWhere("g.localisation = :localisation")
                    ->setParameter('localisation', $criteria['localisation']);
            }

            if (!empty($criteria['region'])) {
                $queryBuilder->andWhere("g.region = :region")
                    ->setParameter('region', $criteria['region']);
            }

            if (!empty($criteria['departement'])) {
                $queryBuilder->andWhere("g.departement = :departement")
                    ->setParameter('departement', $criteria['departement']);
            }
        



        return $queryBuilder->getQuery()->getResult();
    }
}
