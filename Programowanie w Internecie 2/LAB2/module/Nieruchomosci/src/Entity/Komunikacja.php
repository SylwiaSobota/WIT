<?php

namespace Nieruchomosci\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Komunikacja
 *
 * @ORM\Entity
 * @ORM\Table(name="komunikacja")
 */
class Komunikacja
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $nazwa;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Komunikacja
     */
    public function setId(int $id): Komunikacja
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    /**
     * @param string $nazwa
     * @return Komunikacja
     */
    public function setNazwa(string $nazwa): Komunikacja
    {
        $this->nazwa = $nazwa;

        return $this;
    }
}

