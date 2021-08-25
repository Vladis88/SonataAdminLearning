<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class City
 *
 * @ORM\Entity
 */
class City extends AbstractEntity
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private ?string $title;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer")
     */
    private ?int $number;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private bool $isBig = false;

    /**
     * @var \App\Entity\State|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\State", inversedBy="cities")
     */
    private ?State $state = null;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return City
     */
    public function setTitle(?string $title): City
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     * @return City
     */
    public function setNumber(?int $number): City
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBig(): bool
    {
        return $this->isBig;
    }

    /**
     * @param bool $isBig
     * @return City
     */
    public function setIsBig(bool $isBig): City
    {
        $this->isBig = $isBig;
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
     * @return City
     */
    public function setState(?State $state): City
    {
        $this->state = $state;
        return $this;
    }

}