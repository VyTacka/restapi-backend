<?php

namespace AppBundle\Service;

use AppBundle\Repository\AchievementPropertyRepository;

class AchievementPropertyService
{
    /**
     * @var AchievementPropertyRepository
     */
    private $repository;

    /**
     * AchievementPropertyService constructor.
     * @param AchievementPropertyRepository $repository
     */
    public function __construct(AchievementPropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Finds all achievement properties
     *
     * @return array
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }
}
