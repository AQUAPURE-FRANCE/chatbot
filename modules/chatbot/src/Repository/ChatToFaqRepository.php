<?php

namespace App\Repository;

use App\Entity\ChatToFaq;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChatToFaq|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatToFaq|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatToFaq[]    findAll()
 * @method ChatToFaq[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatToFaqRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatToFaq::class);
    }

    // /**
    //  * @return ChatToFaq[] Returns an array of ChatToFaq objects
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
    public function findOneBySomeField($value): ?ChatToFaq
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
