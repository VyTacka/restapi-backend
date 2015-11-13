<?php

namespace AppBundle\Service;

use AppBundle\Repository\PropertyRepository;

class PropertyService
{
    /**
     * @var PropertyRepository
     */
    private $repository;

    /**
     * AchievementPropertyService constructor.
     * @param PropertyRepository $repository
     */
    public function __construct(PropertyRepository $repository)
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
