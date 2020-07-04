<?php

namespace App\Entity;

use App\Repository\BoursierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BoursierRepository::class)
 */
class Boursier
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
    private $typeBourse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeBourse(): ?string
    {
        return $this->typeBourse;
    }

    public function setTypeBourse(string $typeBourse): self
    {
        $this->typeBourse = $typeBourse;

        return $this;
    }
}
