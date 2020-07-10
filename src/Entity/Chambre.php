<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
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
    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nbtmnt;

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
   

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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
