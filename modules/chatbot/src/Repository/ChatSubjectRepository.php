<?php

namespace App\Repository;

use App\Entity\ChatSubject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChatSubject|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatSubject|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatSubject[]    findAll()
 * @method ChatSubject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatSubjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatSubject::class);
    }

    // /**
    //  * @return ChatSubject[] Returns an array of ChatSubject objects
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
    public function findOneBySomeField($value): ?ChatSubject
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
