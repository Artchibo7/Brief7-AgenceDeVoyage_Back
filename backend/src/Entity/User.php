<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Length(min: 2, max: 50, minMessage: "Le nom doit avoir plus de 2 caractères", maxMessage: "Le nom ne doit avoir plus de 50 caractères")]
    #[Assert\NotBlank(message: "Le champ ne peut pas être vide!")]
    #[ORM\Column(length: 50)]
    private ?string $Nom = null;

    #[Assert\Length(min: 2, max: 50, minMessage: "Le prenom doit avoir plus de 2 caractères", maxMessage: "Le prenom ne doit avoir plus de 50 caractères")]
    #[Assert\NotBlank(message: "Le champ ne peut pas être vide!")]
    #[ORM\Column(length: 50)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 20)]
    private ?string $Telephone = null;

    #[Assert\Email(message: "L'email n'est pas valide")]
    #[ORM\Column(length: 80)]
    private ?string $email = null;

    
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column]
    private array $roles = [];




    /**
     * @var Collection<int, Voyage>
     */
    #[ORM\OneToMany(targetEntity: Voyage::class, mappedBy: 'user')]
    private Collection $voyages;

    public function __construct() {
        $this->voyages = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(string $email): static {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_EDITEUR';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): static {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string {
        return $this->Nom;
    }

    public function setNom(?string $Nom): static {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): static {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getTelephone(): ?string {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): static {
        $this->Telephone = $Telephone;

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
            $voyage->setUser($this);
        }

        return $this;
    }

    public function removeVoyage(Voyage $voyage): static {
        if ($this->voyages->removeElement($voyage)) {
            // set the owning side to null (unless already changed)
            if ($voyage->getUser() === $this) {
                $voyage->setUser(null);
            }
        }

        return $this;
    }
}
