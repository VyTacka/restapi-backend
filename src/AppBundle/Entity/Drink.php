<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Exclude;

/**
 * Drink
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DrinkRepository")
 */
class Drink
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
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="packaging_capacity", type="integer")
     */
    private $packagingCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="packaging_amount", type="integer")
     */
    private $packagingAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="packaging_price", type="float")
     */
    private $packagingPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="alc_vol", type="float")
     */
    private $alcVol;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="smallint")
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @Exclude()
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
     * @return Drink
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
     * Set image
     *
     * @param string $image
     *
     * @return Drink
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Drink
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set packagingCapacity
     *
     * @param integer $packagingCapacity
     *
     * @return Drink
     */
    public function setPackagingCapacity($packagingCapacity)
    {
        $this->packagingCapacity = $packagingCapacity;

        return $this;
    }

    /**
     * Get packagingCapacity
     *
     * @return integer
     */
    public function getPackagingCapacity()
    {
        return $this->packagingCapacity;
    }

    /**
     * Set packagingAmount
     *
     * @param integer $packagingAmount
     *
     * @return Drink
     */
    public function setPackagingAmount($packagingAmount)
    {
        $this->packagingAmount = $packagingAmount;

        return $this;
    }

    /**
     * Get packagingAmount
     *
     * @return integer
     */
    public function getPackagingAmount()
    {
        return $this->packagingAmount;
    }

    /**
     * Set packagingPrice
     *
     * @param float $packagingPrice
     *
     * @return Drink
     */
    public function setPackagingPrice($packagingPrice)
    {
        $this->packagingPrice = $packagingPrice;

        return $this;
    }

    /**
     * Get packagingPrice
     *
     * @return float
     */
    public function getPackagingPrice()
    {
        return $this->packagingPrice;
    }

    /**
     * Set alcVol
     *
     * @param float $alcVol
     *
     * @return Drink
     */
    public function setAlcVol($alcVol)
    {
        $this->alcVol = $alcVol;

        return $this;
    }

    /**
     * Get alcVol
     *
     * @return float
     */
    public function getAlcVol()
    {
        return $this->alcVol;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Drink
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Drink
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Drink
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
     * Drink constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }
}
