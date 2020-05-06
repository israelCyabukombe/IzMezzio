<?php

declare(strict_types=1);

namespace App\Model;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Class ArticleRepository
 * @package App\Model
 */
Abstract class  ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * ArticleRepository constructor.
     * @param EntityManagerInterface $entityManager
     * @param ObjectRepository $doctrineRepo
     */
    public function __construct(EntityManagerInterface $entityManager, $doctrineRepo)
    {
        $this->entityManager = $entityManager;
        $this->doctrineRepo  = $doctrineRepo;
    }
}