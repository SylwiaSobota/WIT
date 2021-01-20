<?php

namespace Nieruchomosci\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mieszkanie
 *
 * @ORM\Entity(repositoryClass="Nieruchomosci\Repository\MieszkanieRepository")
 * @ORM\Table(name="mieszkania")
 */
class Mieszkanie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $pietro = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $liczba_pieter = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $rok_budowy = null;

    /**
     * @ORM\OneToOne(targetEntity="Nieruchomosc", mappedBy="mieszkanie", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="nieruchomosc_id", referencedColumnName="id")
     */
    private ?Nieruchomosc $nieruchomosc = null;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Mieszkanie
     */
    public function setId(int $id): Mieszkanie
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPietro(): ?int
    {
        return $this->pietro;
    }

    /**
     * @param int $pietro
     * @return Mieszkanie
     */
    public function setPietro(int $pietro): Mieszkanie
    {
        $this->pietro = $pietro;

        return $this;
    }

    /**
     * @return int
     */
    public function getLiczbaPieter(): ?int
    {
        return $this->liczba_pieter;
    }

    /**
     * @param int $liczba_pieter
     * @return Mieszkanie
     */
    public function setLiczbaPieter(int $liczba_pieter): Mieszkanie
    {
        $this->liczba_pieter = $liczba_pieter;

        return $this;
    }

    /**
     * @return int
     */
    public function getRokBudowy(): ?int
    {
        return $this->rok_budowy;
    }

    /**
     * @param int $rok_budowy
     * @return Mieszkanie
     */
    public function setRokBudowy(int $rok_budowy): Mieszkanie
    {
        $this->rok_budowy = $rok_budowy;

        return $this;
    }

    /**
     * @return Nieruchomosc
     */
    public function getNieruchomosc(): ?Nieruchomosc
    {
        return $this->nieruchomosc;
    }

    /**
     * @param Nieruchomosc $nieruchomosc
     * @return Mieszkanie
     */
    public function setNieruchomosc(Nieruchomosc $nieruchomosc): Mieszkanie
    {
        $this->nieruchomosc = $nieruchomosc;

        return $this;
    }
}

