<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
// #[ApiResource(
//     // operations: [
//     //     new Post(),
//     //     new Patch(),
//     //     new Get(),
//     //     new GetCollection()
//     // ]
// )]
#[ApiResource]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $path = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    private ?Socks $socksImage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getSocksImage(): ?Socks
    {
        return $this->socksImage;
    }

    public function setSocksImage(?Socks $socksImage): static
    {
        $this->socksImage = $socksImage;

        return $this;
    }
}
