<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    // #[Groups("app_reservation_index")]
    #[Groups('api_reservation_new')]
    private ?int $id = null;

    #[Assert\Length
    (
        min: 2, 
        max: 50, 
        minMessage: "Le nom du voyage doit comporter 2 caractères minimum.", 
        maxMessage: " Le nom doit avoir moins de 50 caractères."
        )]
    #[Assert\NotBlank
    (
        message: "Le champ ne peut pas être vide!"
        )]
    #[ORM\Column(length: 50)]
    #[Groups('api_reservation_new')]
    private ?string $Nom = null;

    #[Assert\Length
    (
        min: 2, 
        max: 50, 
        minMessage: "Le prénom du voyage doit comporter 2 caractères minimum.", 
        maxMessage: " Le prénom doit avoir moins de 50 caractères."
        )]
    #[Assert\NotBlank
    (
        message: "Le champ ne peut pas être vide!"
        )]
    #[ORM\Column(length: 50)]
    #[Groups('api_reservation_new')]
    private ?string $Prenom = null;

    #[ORM\Column(length: 80)]
    #[Groups('api_reservation_new')]
    private ?string $Email = null;

    #[ORM\Column(length: 20)]
    #[Groups('api_reservation_new')]
    private ?string $Telephone = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[Groups('api_reservation_new')]

    #[ORM\JoinColumn(nullable: false)]
    private ?Voyage $voyage = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[Groups('api_reservation_new')]

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

    public function getVoyage(): ?Voyage {
        return $this->voyage;
    }

    public function setVoyage(?Voyage $voyage): static {
        $this->voyage = $voyage;

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
