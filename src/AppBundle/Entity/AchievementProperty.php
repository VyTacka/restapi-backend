<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementProperty
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AchievementPropertyRepository")
 */
class AchievementProperty
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
     * @var integer
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="activation_rule", type="string", length=255)
     */
    private $activationRule;

    /**
     * @var integer
     *
     * @ORM\Column(name="activation_value", type="integer")
     */
    private $activationValue;

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
     * @return AchievementProperty
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
     * Set value
     *
     * @param integer $value
     *
     * @return AchievementProperty
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set activationRule
     *
     * @param string $activationRule
     *
     * @return AchievementProperty
     */
    public function setActivation($activationRule)
    {
        $this->activationRule = $activationRule;

        return $this;
    }

    /**
     * Get activationRule
     *
     * @return string
     */
    public function getActivationRule()
    {
        return $this->activationRule;
    }

    /**
     * Set activationValue
     *
     * @param integer $activationValue
     *
     * @return AchievementProperty
     */
    public function setActivationValue($activationValue)
    {
        $this->activationValue = $activationValue;

        return $this;
    }

    /**
     * Get activationValue
     *
     * @return integer
     */
    public function getActivationValue()
    {
        return $this->activationValue;
    }

    /**
     * Set activationRule
     *
     * @param string $activationRule
     *
     * @return AchievementProperty
     */
    public function setActivationRule($activationRule)
    {
        $this->activationRule = $activationRule;

        return $this;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return AchievementProperty
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
