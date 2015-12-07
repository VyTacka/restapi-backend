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
    public function achieve(User $user)
    {


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

//    public function checkAchievements() :Vector {
//        var aRet :Vector = new Vector();
//
//        for (var n :String in mAchievements) {
//            var aAchivement :Achievement = mAchievements[n];
    //
    //    if (aAchivement.unlocked == false) {
    //        var aActiveProps :int = 0;
    //
    //        for (var p :int = 0; p < aAchivement.props.length; p++) {
    //            var aProp :Property = mProps[aAchivement.props[p]];
    //
    //        if (aProp.isActive()) {
    //            aActiveProps++;
    //        }
    //      }
    //
    //      if (aActiveProps == aAchivement.props.length) {
    //          aAchivement.unlocked = true;
    //          aRet.push(aAchivement);
    //      }
    //    }
    //  }
    //  return aRet;
    //}

}
