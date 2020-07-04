<?php

namespace App\Entity;

use App\Repository\BatimentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BatimentRepository::class)
 */
class Batiment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nbtmnt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbtmnt(): ?string
    {
        return $this->Nbtmnt;
    }

    public function setNbtmnt(string $Nbtmnt): self
    {
        $this->Nbtmnt = $Nbtmnt;

        return $this;
    }
}
