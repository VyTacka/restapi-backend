<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Property
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PropertyRepository")
 */
class Property
{
    /**
     * Activation rules
     */
    const ACTIVE_IF_GREATER_THAN = ">";
    const ACTIVE_IF_LESS_THAN = "<";
    const ACTIVE_IF_EQUALS_TO = "==";

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
     * @return Property
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
     * Set activationRule
     *
     * @param string $activationRule
     *
     * @return Property
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
     * @return Property
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
     * @return Property
     */
    public function setActivationRule($activationRule)
    {
        $this->activationRule = $activationRule;

        return $this;
    }
}
