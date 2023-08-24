<?php

namespace App\Entity;

use App\Repository\SizeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SizeRepository::class)]
class Size
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_size = null;

    #[ORM\Column]
    private ?float $number = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNumber(): ?float
    {
        return $this->number;
    }

    public function setNumber(float $number): static
    {
        $this->number = $number;

        return $this;
    }
}
