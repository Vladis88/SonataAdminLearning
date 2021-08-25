<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Address
 *
 * @ORM\Entity
 */
class Address extends AbstractEntity
{
    /**
     * @var \App\Entity\City|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\City")
     */
    private ?City $city = null;

    /**
     * @var \App\Entity\State|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\State")
     */
    private ?State $state = null;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $street = null;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $apartment = null;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    private ?string $zipCode = null;

    /**
     * @return \App\Entity\City|null
     */
    public function getCity(): ?City
    {
        return $this->city;
    }

    /**
     * @param \App\Entity\City|null $city
     * @return Address
     */
    public function setCity(?City $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \App\Entity\State|null
     */
    public function getState(): ?State
    {
        return $this->state;
    }

    /**
     * @param \App\Entity\State|null $state
     * @return Address
     */
    public function setState(?State $state): Address
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     * @return Address
     */
    public function setStreet(?string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getApartment(): ?string
    {
        return $this->apartment;
    }

    /**
     * @param string|null $apartment
     * @return Address
     */
    public function setApartment(?string $apartment): Address
    {
        $this->apartment = $apartment;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     * @return Address
     */
    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

}