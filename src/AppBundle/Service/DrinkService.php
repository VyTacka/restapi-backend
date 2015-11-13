<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use AppBundle\Repository\DrinkRepository;

class DrinkService
{
    /**
     * @var DrinkRepository
     */
    private $repository;

    /**
     * DrinkService constructor.
     * @param DrinkRepository $repository
     */
    public function __construct(DrinkRepository $repository)
    {
        $this->repository = $repository;
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
        return $this->repository->findOneBy($criteria);
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
}
