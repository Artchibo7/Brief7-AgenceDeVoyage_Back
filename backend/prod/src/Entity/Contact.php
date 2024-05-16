<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    // #[Groups("app_contact_index")]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    #[Groups('api_contact_new')]
    private ?string $Nom = null;

    #[ORM\Column(length: 80)]
    #[Groups('api_contact_new')]
    private ?string $Prenom = null;

    #[ORM\Column(length: 80)]
    #[Groups('api_contact_new')]
    private ?string $Email = null;

    #[ORM\Column(length: 20)]
    #[Groups('api_contact_new')]
    private ?string $Telephone = null;

    #[ORM\Column(length: 255)]
    #[Groups('api_contact_new')]
    private ?string $Message = null;

    #[ORM\ManyToOne(inversedBy: 'contact')]
    #[Groups('api_contact_new')]
    private ?Statut $statut = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): ?string {
        return $this->Nom;
    }

    public function setNom(string $Nom): static {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string {
        return $this->Email;
    }

    public function setEmail(string $Email): static {
        $this->Email = $Email;

        return $this;
    }

    public function getTelephone(): ?string {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): static {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getMessage(): ?string {
        return $this->Message;
    }

    public function setMessage(string $Message): static {
        $this->Message = $Message;

        return $this;
    }

    public function getStatut(): ?Statut {
        return $this->statut;
    }

    public function setStatut(?Statut $statut): static {
        $this->statut = $statut;

        return $this;
    }
}
