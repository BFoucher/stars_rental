<?php

namespace StarsRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Renting
 *
 * @ORM\Table(name="renting")
 * @ORM\Entity(repositoryClass="StarsRentalBundle\Repository\RentingRepository")
 */
class Renting
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
     * @var date
     *
     * @ORM\Column(name="creation_date", type="date")
     */
    private $creationDate;

    /**
     * @var date
     *
     * @ORM\Column(name="return_date", type="date")
     */
    private $returnDate;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Client", mappedBy="client")
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Ship", mappedBy="ship")
     */
    private $ship;

    /**
     * @var bool
     *
     * @ORM\Column(name="outclassed", type="boolean")
     */
    private $outclassed;

    public function __construct()
    {
        $this->creationDate = new \DateTime('now');
        $this->returnDate = new \DateTime('now');
    }


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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Renting
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set returnDate
     *
     * @param \DateTime $returnDate
     *
     * @return Renting
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Renting
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set ship
     *
     * @param string $ship
     *
     * @return Renting
     */
    public function setShip($ship)
    {
        $this->ship = $ship;

        return $this;
    }

    /**
     * Get ship
     *
     * @return string
     */
    public function getShip()
    {
        return $this->ship;
    }

    /**
     * Set outclassed
     *
     * @param boolean $outclassed
     *
     * @return Renting
     */
    public function setOutclassed($outclassed)
    {
        $this->outclassed = $outclassed;

        return $this;
    }

    /**
     * Get outclassed
     *
     * @return bool
     */
    public function getOutclassed()
    {
        return $this->outclassed;
    }
}
