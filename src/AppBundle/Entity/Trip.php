<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="trips")
 */
class Trip
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $passenger_id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $from;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $to;

    /**
     * @ORM\Column(type="integer")
     */
    private $departure;

    /**
     * @ORM\Column(type="integer")
     */
    private $arrival;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $is_active;


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
     * Set passengerId
     *
     * @param integer $passengerId
     *
     * @return Trip
     */
    public function setPassengerId($passengerId)
    {
        $this->passenger_id = $passengerId;

        return $this;
    }

    /**
     * Get passengerId
     *
     * @return integer
     */
    public function getPassengerId()
    {
        return $this->passenger_id;
    }

    /**
     * Set from
     *
     * @param string $from
     *
     * @return Trip
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return Trip
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set departure
     *
     * @param integer $departure
     *
     * @return Trip
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return integer
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param integer $arrival
     *
     * @return Trip
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return integer
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set isActive
     *
     * @param string $isActive
     *
     * @return Trip
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->is_active;
    }
}
