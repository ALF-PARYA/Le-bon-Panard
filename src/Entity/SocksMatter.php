<?php

namespace App\Entity;

use App\Repository\SocksMatterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocksMatterRepository::class)]
class SocksMatter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_Socks = null;

    #[ORM\Column]
    private ?int $id_Matter = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSocks(): ?int
    {
        return $this->id_Socks;
    }

    public function setIdSocks(int $id_Socks): static
    {
        $this->id_Socks = $id_Socks;

        return $this;
    }

    public function getIdMatter(): ?int
    {
        return $this->id_Matter;
    }

    public function setIdMatter(int $id_Matter): static
    {
        $this->id_Matter = $id_Matter;

        return $this;
    }
}
