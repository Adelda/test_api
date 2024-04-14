<?php

namespace App\Repository;

use App\Entity\RestArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RestArea>
 *
 * @method RestArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method RestArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method RestArea[]    findAll()
 * @method RestArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RestArea::class);
    }

    //    /**
    //     * @return RestArea[] Returns an array of RestArea objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?RestArea
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
