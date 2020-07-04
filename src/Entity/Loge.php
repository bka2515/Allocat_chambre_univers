<?php

namespace App\Entity;

use App\Repository\LogeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogeRepository::class)
 */
class Loge
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
    private $Nchmbr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNchmbr(): ?string
    {
        return $this->Nchmbr;
    }

    public function setNchmbr(string $Nchmbr): self
    {
        $this->Nchmbr = $Nchmbr;

        return $this;
    }
}
