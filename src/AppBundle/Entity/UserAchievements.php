<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAchievements
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserAchievementsRepository")
 */
class UserAchievements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumn(name="achievement_id", referencedColumnName="id")
     */
    private $achievement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="unlocked", type="boolean")
     */
    private $unlocked;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set unlocked
     *
     * @param boolean $unlocked
     *
     * @return UserAchievements
     */
    public function setUnlocked($unlocked)
    {
        $this->unlocked = $unlocked;

        return $this;
    }

    /**
     * Is unlocked
     *
     * @return boolean
     */
    public function isUnlocked()
    {
        return $this->unlocked;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return UserAchievements
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set achievement
     *
     * @param Achievement $achievement
     *
     * @return UserAchievements
     */
    public function setAchievement(Achievement $achievement = null)
    {
        $this->achievement = $achievement;

        return $this;
    }

    /**
     * Get achievement
     *
     * @return Achievement
     */
    public function getAchievement()
    {
        return $this->achievement;
    }
}
