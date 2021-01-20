<?php

namespace Nieruchomosci\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miasto
 *
 * @ORM\Entity()
 * @ORM\Table(name="miasta")
 */
class Miasto
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
     * @return Miasto
     */
    public function setId(int $id): Miasto
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
     * @return Miasto
     */
    public function setNazwa(string $nazwa): Miasto
    {
        $this->nazwa = $nazwa;

        return $this;
    }
}

