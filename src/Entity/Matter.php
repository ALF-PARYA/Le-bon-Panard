<?php

namespace App\Entity;

use App\Repository\MatterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatterRepository::class)]
class Matter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Socks::class, inversedBy: 'matters')]
    private Collection $socksMater;

    public function __construct()
    {
        $this->socksMater = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Socks>
     */
    public function getSocksMater(): Collection
    {
        return $this->socksMater;
    }

    public function addSocksMater(Socks $socksMater): static
    {
        if (!$this->socksMater->contains($socksMater)) {
            $this->socksMater->add($socksMater);
        }

        return $this;
    }

    public function removeSocksMater(Socks $socksMater): static
    {
        $this->socksMater->removeElement($socksMater);

        return $this;
    }
}
