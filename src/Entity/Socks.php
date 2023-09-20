<?php

namespace App\Entity;

use App\Repository\SocksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocksRepository::class)]
class Socks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\ManyToMany(targetEntity: Size::class, inversedBy: 'socks')]
    private Collection $socksSize;

    #[ORM\OneToMany(mappedBy: 'socksImage', targetEntity: Image::class)]
    private Collection $images;

    #[ORM\ManyToMany(targetEntity: Matter::class, mappedBy: 'socksMater')]
    private Collection $matters;

    #[ORM\ManyToOne(inversedBy: 'socks')]
    private ?user $userSocks = null;

    public function __construct()
    {
        $this->socksSize = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->matters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, Size>
     */
    public function getSocksSize(): Collection
    {
        return $this->socksSize;
    }

    public function addSocksSize(Size $socksSize): static
    {
        if (!$this->socksSize->contains($socksSize)) {
            $this->socksSize->add($socksSize);
        }

        return $this;
    }

    public function removeSocksSize(Size $socksSize): static
    {
        $this->socksSize->removeElement($socksSize);

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): static
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setSocksImage($this);
        }

        return $this;
    }

    public function removeImage(Image $image): static
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getSocksImage() === $this) {
                $image->setSocksImage(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Matter>
     */
    public function getMatters(): Collection
    {
        return $this->matters;
    }

    public function addMatter(Matter $matter): static
    {
        if (!$this->matters->contains($matter)) {
            $this->matters->add($matter);
            $matter->addSocksMater($this);
        }

        return $this;
    }

    public function removeMatter(Matter $matter): static
    {
        if ($this->matters->removeElement($matter)) {
            $matter->removeSocksMater($this);
        }

        return $this;
    }

    public function getUserSocks(): ?user
    {
        return $this->userSocks;
    }

    public function setUserSocks(?user $userSocks): static
    {
        $this->userSocks = $userSocks;

        return $this;
    }
}
