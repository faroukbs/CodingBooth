<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UtilisateursRepository::class)
 * @UniqueEntity(
 * fields={"Email"},
 * message= "Email already exist !" 
 * )
 */
class Utilisateurs implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="Last Name is required")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="First Name is required")
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Telephone is required")
     * @Assert\Length(min=8,
     *                max=8,
     *                minMessage = "Telephone must has {{ limit }} numbers",
     *                maxMessage = "Telephone must has {{ limit }} numbers")
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Password is required")
     * @Assert\Length(min=8, minMessage = "Your Password must be at least {{ limit }} characters long",)
     */
    private $Password;

    /**
     * @Assert\EqualTo(propertyPath="Password", message="Password and confirm password doesn't match")
     */
    private $ConfirmPassword;

    

    /**
     * @ORM\Column(type="json")
     */
    private $Role = [];

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Token;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="client")
     */
    private $contact;


    public function __construct()
    {
        $this->Livraison = new ArrayCollection();
        $this->contact = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }
    public function getConfirmPassword(): ?string
    {
        return $this->ConfirmPassword;
    }

    public function setConfirmPassword(string $ConfirmPassword): self
    {
        $this->ConfirmPassword = $ConfirmPassword;

        return $this;
    }
  
    public function getRole(): array
    {
        $roles = $this->Role;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRole(array $roles): self
    {
        $this->Role = $roles;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->Token;
    }

    public function setToken(?string $Token): self
    {
        $this->Token = $Token;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->Role;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    public function getUsername(): ?string
    {
        return $this->Email;
    }
    public function eraseCredentials(){}
    public function getSalt(){}

    /**
     * @return Collection|Contact[]
     */
    public function getContact(): Collection
    {
        return $this->contact;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contact->contains($contact)) {
            $this->contact[] = $contact;
            $contact->setClient($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contact->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getClient() === $this) {
                $contact->setClient(null);
            }
        }

        return $this;
    }

    
   
   
}