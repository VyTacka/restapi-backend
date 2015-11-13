<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProperties
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserPropertiesRepository")
 */
class UserProperties
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
     * @var Property
     *
     * @ORM\ManyToOne(targetEntity="Property")
     * @ORM\JoinColumn(name="property_id", referencedColumnName="id")
     */
    private $property;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

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
     * Set value
     *
     * @param integer $value
     *
     * @return UserProperties
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
     * Does value meets activationRule and activationValue
     *
     * @return bool
     */
    public function isActive()
    {
        switch ($this->property->getActivationRule()) {
            case Property::ACTIVE_IF_GREATER_THAN:
                return $this->value > $this->property->getActivationRule();
            case Property::ACTIVE_IF_LESS_THAN:
                return $this->value < $this->property->getActivationRule();
            case Property::ACTIVE_IF_EQUALS_TO:
                return $this->value == $this->property->getActivationRule();
            default:
                return false;
        }
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return UserProperties
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
     * Set property
     *
     * @param Property $property
     *
     * @return UserProperties
     */
    public function setProperty(Property $property = null)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return Property
     */
    public function getProperty()
    {
        return $this->property;
    }
}
