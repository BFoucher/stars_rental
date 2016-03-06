<?php

namespace StarsRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ship
 *
 * @ORM\Table(name="ship")
 * @ORM\Entity(repositoryClass="StarsRentalBundle\Repository\ShipRepository")
 */
class Ship
{
    /**
     * @var int
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
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var bool
     *
     * @ORM\Column(name="avalability", type="boolean")
     */
    private $avalability;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string")
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Renting", mappedBy="renting")
     */
    private $renting;


    /**
     * Get id
     *
     * @return int
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
     * @return Ship
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
     * Set category
     *
     * @param string $category
     *
     * @return Ship
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set avalability
     *
     * @param boolean $avalability
     *
     * @return Ship
     */
    public function setAvalability($avalability)
    {
        $this->avalability = $avalability;

        return $this;
    }

    /**
     * Get avalability
     *
     * @return bool
     */
    public function getAvalability()
    {
        return $this->avalability;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Ship
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set rental
     *
     * @param string $rental
     *
     * @return Ship
     */
    public function setRental($rental)
    {
        $this->rental = $rental;

        return $this;
    }

    /**
     * Get rental
     *
     * @return string
     */
    public function getRental()
    {
        return $this->rental;
    }

    public function __toString()
    {
      return $this->name;
    }
}
