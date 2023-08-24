<?php

namespace App\Entity;

use App\Repository\BuyingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuyingRepository::class)]
class Buying
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_Socks = null;

    #[ORM\Column]
    private ?int $id_Users = null;

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

    public function getIdUsers(): ?int
    {
        return $this->id_Users;
    }

    public function setIdUsers(int $id_Users): static
    {
        $this->id_Users = $id_Users;

        return $this;
    }
}
