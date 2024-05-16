<?php

namespace App\Entity;

use App\Repository\DestinationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: DestinationRepository::class)]
class Destination {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("api_voyage_index","api_destination_index")]

    private ?int $id = null;

    #[ORM\Column(length: 80)]
    #[Groups("api_voyage_index")]
    private ?string $NomPays = null;

    #[ORM\Column(length: 80)]
    #[Groups("api_voyage_index")]
    private ?string $NomVille = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("api_voyage_index")]
    private ?string $image = null;

    /**
     * @var Collection<int, Voyage>
     */
    #[ORM\OneToMany(targetEntity: Voyage::class, mappedBy: 'destination')]
    private Collection $voyages;

    public function __construct() {
        $this->voyages = new ArrayCollection();
    }


    public function getId(): ?int {
        return $this->id;
    }

    public function getNomPays(): ?string {
        return $this->NomPays;
    }

    public function setNomPays(string $NomPays): static {
        $this->NomPays = $NomPays;

        return $this;
    }

    public function getNomVille(): ?string {
        return $this->NomVille;
    }

    public function setNomVille(string $NomVille): static {
        $this->NomVille = $NomVille;

        return $this;
    }

    public function getImage(): ?string {
        return $this->image;
    }

    public function setImage(?string $image): static {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Voyage>
     */
    public function getVoyages(): Collection {
        return $this->voyages;
    }

    public function addVoyage(Voyage $voyage): static {
        if (!$this->voyages->contains($voyage)) {
            $this->voyages->add($voyage);
            $voyage->setDestination($this);
        }

        return $this;
    }

    public function removeVoyage(Voyage $voyage): static {
        if ($this->voyages->removeElement($voyage)) {
            // set the owning side to null (unless already changed)
            if ($voyage->getDestination() === $this) {
                $voyage->setDestination(null);
            }
        }

        return $this;
    }
}
