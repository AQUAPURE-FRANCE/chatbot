<?php

namespace App\Repository;

use App\Entity\ChatBlacklist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChatBlacklist|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatBlacklist|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatBlacklist[]    findAll()
 * @method ChatBlacklist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatBlacklistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatBlacklist::class);
    }

    // /**
    //  * @return ChatBlacklist[] Returns an array of ChatBlacklist objects
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
    public function findOneBySomeField($value): ?ChatBlacklist
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
