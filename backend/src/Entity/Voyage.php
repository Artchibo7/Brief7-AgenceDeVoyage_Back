<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: VoyageRepository::class)]
class Voyage {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("api_voyage_index","api_voyage_show")]
    private ?int $id = null;

    #[Assert\Length(min: 2, max: 80, minMessage: "Le nom du voyage doit comporter 2 caractères minimum.", maxMessage: " Le nom doit avoir moins de 80 caractères.")]
    #[Assert\NotBlank(message: "Le champ ne peut pas être vide!")]
    #[ORM\Column(length: 80)]
    #[Groups("api_voyage_index","api_voyage_show")]
    private ?string $NomVoyage = null;

    #[Assert\NotBlank(message: "La date de départ ne peut pas être vide!")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups("api_voyage_index","api_voyage_show")]
    private ?\DateTimeInterface $DateDepart = null;

    #[Assert\NotBlank(message: "La date de retour ne peut pas être vide!")]
    #[Assert\Expression("this.getDateRetour() > this.getDateDepart()", message: "La date de retour doit etre superieure a la date de depart")]
    // @Assert\Callback({"App\Validator\VoyageValidator", "validateVoyage"})
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups("api_voyage_index","api_voyage_show")]
    private ?\DateTimeInterface $DateRetour = null;

    #[Assert\NotBlank(message: "Le champ ne peut pas être vide!")]
    #[Assert\Length(min: 2, max: 255, minMessage: "La description doit avoir plus de 2 caractères", maxMessage: "La description doit avoir moins de 255 caractères")]
    #[ORM\Column(length: 255)]
    #[Groups("api_voyage_index","api_voyage_show")]
    private ?string $Description = null;

    #[ORM\Column]
    #[Groups("api_voyage_index","api_voyage_show")]
    private ?int $prix = null;

    #[ORM\ManyToOne(inversedBy: 'voyages')]
    #[Groups("api_voyage_index","api_voyage_show")]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'voyage')]

    private Collection $reservations;



    /**
     * @var Collection<int, Categorie>
     */
    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'voyages')]
    #[Groups("api_voyage_index")]

    private Collection $categorie;

    #[ORM\ManyToOne(inversedBy: 'voyages')]
    #[Groups("api_voyage_index")]
    private ?Destination $destination = null;

  

    public function __construct() {
        $this->reservations = new ArrayCollection();
        // $this->destination = new ArrayCollection();
        $this->categorie = new ArrayCollection();
    }


    public function getId(): ?int {
        return $this->id;
    }

    public function getNomVoyage(): ?string {
        return $this->NomVoyage;
    }

    public function setNomVoyage(string $NomVoyage): static {
        $this->NomVoyage = $NomVoyage;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface {
        return $this->DateDepart;
    }

    public function setDateDepart(\DateTimeInterface $DateDepart): static {
        $this->DateDepart = $DateDepart;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface {
        return $this->DateRetour;
    }

    public function setDateRetour(\DateTimeInterface $DateRetour): static {
        $this->DateRetour = $DateRetour;

        return $this;
    }

    public function getDescription(): ?string {
        return $this->Description;
    }

    public function setDescription(string $Description): static {
        $this->Description = $Description;

        return $this;
    }

    public function getUser(): ?User {
        return $this->user;
    }

    public function setUser(?User $user): static {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setVoyage($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getVoyage() === $this) {
                $reservation->setVoyage(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategorie(): Collection {
        return $this->categorie;
    }

    public function addCategorie(Categorie $categorie): static {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie->add($categorie);
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): static {
        $this->categorie->removeElement($categorie);

        return $this;
    }

    public function getDestination(): ?Destination {
        return $this->destination;
    }

    public function setDestination(?Destination $destination): static {
        $this->destination = $destination;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
}
