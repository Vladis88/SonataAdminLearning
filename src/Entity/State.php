<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class State
 *
 * @ORM\Entity
 */
class State extends AbstractEntity
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private ?string $title = null;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private int $number;
    /**
     * @var mixed
     *
     * @ORM\OneToMany(targetEntity="App\Entity\City", mappedBy="state", cascade={"persist"})
     */
    private $cities;

    /**
     * State constructor.
     */
    public function __construct()
    {
        $this->cities = new ArrayCollection();
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return State
     */
    public function setTitle(?string $title): State
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return State
     */
    public function setNumber(int $number): State
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param mixed $cities
     * @return State
     */
    public function setCities($cities): State
    {
        $this->cities = $cities;
        return $this;
    }


}