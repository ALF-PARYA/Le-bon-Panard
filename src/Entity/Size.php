<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SizeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SizeRepository::class)]
// #[ApiResource(
//     // operations: [
//     //     new Post(),
//     //     new Patch(),
//     //     new Get(),
//     //     new GetCollection()
//     // ]
// )]
#[ApiResource]
class Size
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Socks::class, mappedBy: 'socksSize')]
    private Collection $socks;

    public function __construct()
    {
        $this->socks = new ArrayCollection();
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
    public function getSocks(): Collection
    {
        return $this->socks;
    }

    public function addSock(Socks $sock): static
    {
        if (!$this->socks->contains($sock)) {
            $this->socks->add($sock);
            $sock->addSocksSize($this);
        }

        return $this;
    }

    public function removeSock(Socks $sock): static
    {
        if ($this->socks->removeElement($sock)) {
            $sock->removeSocksSize($this);
        }

        return $this;
    }
}
