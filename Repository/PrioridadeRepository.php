<?php

namespace Novosga\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Novosga\Entity\Prioridade;
use Novosga\Repository\Contracts\PrioridadeRepositoryInterface;

class PrioridadeRepository extends ServiceEntityRepository implements PrioridadeRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prioridade::class);
    }
}