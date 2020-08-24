<?php

namespace App\Repository;

use App\Entity\ChatEmployee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChatEmployee|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatEmployee|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatEmployee[]    findAll()
 * @method ChatEmployee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatEmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatEmployee::class);
    }

    // /**
    //  * @return ChatEmployee[] Returns an array of ChatEmployee objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChatEmployee
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
