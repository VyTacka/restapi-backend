<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use AppBundle\Repository\DrinkRepository;
use Doctrine\ORM\EntityManager;

class DrinkService
{
    /**
     * @var DrinkRepository
     */
    private $repository;

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * DrinkService constructor.
     * @param DrinkRepository $repository
     * @param EntityManager $entityManager
     */
    public function __construct(DrinkRepository $repository, EntityManager $entityManager)
    {
        $this->repository = $repository;
        $this->entityManager = $entityManager;
    }

    /**
     * Finds all user drinks
     *
     * @param User $user
     * @return mixed
     */
    public function findByUser(User $user)
    {
        return $this->repository->findByUser($user);
    }

    /**
     * Finds drinks by criteria
     *
     * @param $criteria
     * @return array
     */
    public function findBy($criteria)
    {
        return $this->repository->findBy($criteria);
    }

    /**
     * Finds drink by criteria
     *
     * @param $criteria
     * @return array
     */
    public function findOneBy($criteria)
    {
        return $this->repository->findOneBy($criteria);
    }

    /**
     * @param \DateTime $from
     * @param \DateTime $to
     * @param User $user
     * @return array
     */
    public function findBetween(\DateTime $from, \DateTime $to, User $user)
    {
        return $this->repository->findBetween($from, $to, $user);
    }

    /**
     * Save
     */
    public function save()
    {
        $this->entityManager->flush();
    }

    /**
     * Create
     *
     * @param \AppBundle\Entity\Drink $entity
     */
    public function create($entity)
    {
        $this->entityManager->persist($entity);
    }
}
