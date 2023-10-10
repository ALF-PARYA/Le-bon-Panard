<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LocationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
// #[ApiResource(
//     // operations: [
//     //     new Post(),
//     //     new Patch(),
//     //     new Get(),
//     //     new GetCollection()
//     // ]
// )]
#[ApiResource]

class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $town = null;

    #[ORM\Column]
    private ?int $departement_number = null;

    #[ORM\Column(length: 255)]
    private ?string $postal_code = null;

    #[ORM\OneToMany(mappedBy: 'location', targetEntity: User::class)]
    private Collection $userLocation;

    public function __construct()
    {
        $this->userLocation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): static
    {
        $this->town = $town;

        return $this;
    }

    public function getDepartementNumber(): ?int
    {
        return $this->departement_number;
    }

    public function setDepartementNumber(int $departement_number): static
    {
        $this->departement_number = $departement_number;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): static
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUserLocation(): Collection
    {
        return $this->userLocation;
    }

    public function addUserLocation(User $userLocation): static
    {
        if (!$this->userLocation->contains($userLocation)) {
            $this->userLocation->add($userLocation);
            $userLocation->setLocation($this);
        }

        return $this;
    }

    public function removeUserLocation(User $userLocation): static
    {
        if ($this->userLocation->removeElement($userLocation)) {
            // set the owning side to null (unless already changed)
            if ($userLocation->getLocation() === $this) {
                $userLocation->setLocation(null);
            }
        }

        return $this;
    }
}
