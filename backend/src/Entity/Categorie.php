<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("api_categorie_index")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("api_voyage_index" ,"api_categorie_index" )]    
    private ?string $Description = null;

    #[ORM\Column(length: 80)]
    #[Groups("api_voyage_index" ,"api_categorie_index")]    
    private ?string $NomCategorie = null;

    /**
     * @var Collection<int, Voyage>
     */
    #[ORM\ManyToMany(targetEntity: Voyage::class, mappedBy: 'categorie')]
    private Collection $voyages;

    public function __construct() {
        $this->voyages = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getDescription(): ?string {
        return $this->Description;
    }

    public function setDescription(string $Description): static {
        $this->Description = $Description;

        return $this;
    }

    public function getNomCategorie(): ?string {
        return $this->NomCategorie;
    }

    public function setNomCategorie(string $NomCategorie): static {
        $this->NomCategorie = $NomCategorie;

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
            $voyage->addCategorie($this);
        }

        return $this;
    }

    public function removeVoyage(Voyage $voyage): static {
        if ($this->voyages->removeElement($voyage)) {
            $voyage->removeCategorie($this);
        }

        return $this;
    }
}
