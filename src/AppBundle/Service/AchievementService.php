<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use AppBundle\Repository\AchievementRepository;

class AchievementService
{
    /**
     * @var AchievementRepository
     */
    private $repository;

    /**
     * AchievementService constructor.
     * @param AchievementRepository $repository
     */
    public function __construct(AchievementRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Finds all user achievements
     *
     * @param User $user
     * @return mixed
     */
    public function findByUser(User $user)
    {
        return $this->repository->findByUser($user);
    }

    /**
     * Returns achievements if user achieves any
     *
     * @param User $user
     * @return array
     */
    public function achieveAchievements(User $user)
    {
//        if (!empty($this->checkAchievements($user))) {}

        return;
    }

    /**
     * Checks if user achieved any achievement
     *
     * @param User $user
     */
    private function checkAchievements(User $user)
    {
        return;
    }
}
