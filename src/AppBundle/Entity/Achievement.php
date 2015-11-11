<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achievement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AchievementRepository")
 */
class Achievement
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var AchievementProperty
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AchievementProperty")
     * @ORM\JoinColumn(name="achievement_property_id", referencedColumnName="id")
     */
    private $achievementProperty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="unlocked", type="boolean")
     */
    private $unlocked;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


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
     * Set name
     *
     * @param string $name
     *
     * @return Achievement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set achievementProperty
     *
     * @param integer $achievementProperty
     *
     * @return Achievement
     */
    public function setAchievementProperty($achievementProperty)
    {
        $this->achievementProperty = $achievementProperty;

        return $this;
    }

    /**
     * Get achievementProperty
     *
     * @return integer
     */
    public function getAchievementProperty()
    {
        return $this->achievementProperty;
    }

    /**
     * Set unlocked
     *
     * @param boolean $unlocked
     *
     * @return Achievement
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
     * @return Achievement
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
}
