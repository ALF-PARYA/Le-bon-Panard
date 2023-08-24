<?php

namespace App\Entity;

use App\Repository\SocksSizeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocksSizeRepository::class)]
class SocksSize
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_Socks = null;

    #[ORM\Column]
    private ?int $id_size = null;

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

    public function getIdSize(): ?int
    {
        return $this->id_size;
    }

    public function setIdSize(int $id_size): static
    {
        $this->id_size = $id_size;

        return $this;
    }
}
