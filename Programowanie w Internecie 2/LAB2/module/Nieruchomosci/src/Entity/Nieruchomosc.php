<?php

namespace Nieruchomosci\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Nieruchomosc
 *
 * @ORM\Entity
 * @ORM\Table(name="nieruchomosci")
 */
class Nieruchomosc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string")
     */
    private ?string $typ_oferty = null;

    /**
     * @ORM\Column(type="float")
     */
    private ?float $powierzchnia = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $cena = null;

    /**
     * @ORM\Column(type="float")
     */
    private ?float $cena_m2 = null;

    /**
     * @ORM\OneToOne(targetEntity="Mieszkanie", mappedBy="nieruchomosc", cascade={"persist", "remove"})
     */
    private ?Mieszkanie $mieszkanie = null;

    /**
     * @ORM\ManyToOne(targetEntity="Miasto")
     * @ORM\JoinColumn(name="miasto_id", referencedColumnName="id")
     */
    private ?Miasto $miasto = null;

    /**
     * @ORM\ManyToMany(targetEntity="Komunikacja")
     * @ORM\JoinTable(
     *     name="nieruchomosci_komunikacja",
     *     joinColumns={@ORM\JoinColumn(name="nieruchomosc_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="komunikacja_id", referencedColumnName="id")}
     * )
     */
    private Collection $opcjekomunikacji;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->opcjekomunikacji = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Nieruchomosc
     */
    public function setId(int $id): Nieruchomosc
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypOferty(): ?string
    {
        return $this->typ_oferty;
    }

    /**
     * @param string $typ_oferty
     * @return Nieruchomosc
     */
    public function setTypOferty(string $typ_oferty): Nieruchomosc
    {
        $this->typ_oferty = $typ_oferty;

        return $this;
    }

    /**
     * @return float
     */
    public function getPowierzchnia(): ?float
    {
        return $this->powierzchnia;
    }

    /**
     * @param float $powierzchnia
     * @return Nieruchomosc
     */
    public function setPowierzchnia(float $powierzchnia): Nieruchomosc
    {
        $this->powierzchnia = $powierzchnia;

        return $this;
    }

    /**
     * @return int
     */
    public function getCena(): ?int
    {
        return $this->cena;
    }

    /**
     * @param int $cena
     * @return Nieruchomosc
     */
    public function setCena(int $cena): Nieruchomosc
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * @return float
     */
    public function getCenaM2(): ?float
    {
        return $this->cena_m2;
    }

    /**
     * @param float $cena_m2
     * @return Nieruchomosc
     */
    public function setCenaM2(float $cena_m2): Nieruchomosc
    {
        $this->cena_m2 = $cena_m2;

        return $this;
    }

    /**
     * @return Mieszkanie
     */
    public function getMieszkanie(): ?Mieszkanie
    {
        return $this->mieszkanie;
    }

    /**
     * @param Mieszkanie $mieszkanie
     * @return Nieruchomosc
     */
    public function setMieszkanie(Mieszkanie $mieszkanie): Nieruchomosc
    {
        $this->mieszkanie = $mieszkanie;

        return $this;
    }

    /**
     * @return Miasto
     */
    public function getMiasto(): ?Miasto
    {
        return $this->miasto;
    }

    /**
     * @param Miasto $miasto
     * @return Nieruchomosc
     */
    public function setMiasto(Miasto $miasto): Nieruchomosc
    {
        $this->miasto = $miasto;

        return $this;
    }

    /**
     * Add OpcjeKomunikacji
     *
     * @param array $opcjeKomunikacji
     * @return Nieruchomosc
     */
    public function addOpcjekomunikacji($opcjeKomunikacji)
    {
        foreach ($opcjeKomunikacji as $opcja) {
            $this->opcjekomunikacji[] = $opcja;
        }

        return $this;
    }

    /**
     * Remove OpcjeKomunikacji
     *
     * @param array $opcjeKomunikacji
     */
    public function removeOpcjekomunikacji($opcjeKomunikacji)
    {
        foreach ($opcjeKomunikacji as $opcja) {
            $this->opcjekomunikacji->removeElement($opcja);
        }
    }

    /**
     * Get OpcjeKomunikacji
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOpcjekomunikacji()
    {
        return $this->opcjekomunikacji;
    }

    public function pobierzKomunikacje()
    {
        $komunikacja = [];

        foreach ($this->getOpcjeKomunikacji() as $k) {
            $komunikacja[] = $k->getNazwa();
        }

        return empty($komunikacja) ? '-' : implode(', ', $komunikacja);
    }
}