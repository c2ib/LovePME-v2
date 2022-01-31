<?php

namespace App\Repository;

use App\Entity\ReponsesQuestionnaireGeneral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReponsesQuestionnaireGeneral|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReponsesQuestionnaireGeneral|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReponsesQuestionnaireGeneral[]    findAll()
 * @method ReponsesQuestionnaireGeneral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReponsesQuestionnaireGeneralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReponsesQuestionnaireGeneral::class);
    }

    // /**
    //  * @return ReponsesQuestionnaireGeneral[] Returns an array of ReponsesQuestionnaireGeneral objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReponsesQuestionnaireGeneral
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
