<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\EventlRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventlRepository::class)
 */
class Eventl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idevent;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 4,
     *      max = 100,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */

    private $titre;

    /**
     *
     * @ORM\Column(name="datefin", type="date")
     *  @Assert\Date
     * @Assert\GreaterThanOrEqual(propertyPath="dateDebut",
    message="La date du fin doit être supérieure à la date début")
     */
    private $datefin;


    /**
     * @ORM\Column(type="string", length=255)
     *  * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 4,
     *      max = 1000,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $description;

    /**
     * @Assert\Length(
     *      min = 4,
     *      max = 20,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $heure;


    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $adresse;

    /**
     *
     * @ORM\Column(name="datedebut", type="date")
     *  @Assert\Date
     * @Assert\GreaterThanOrEqual("today")
     */

    private $datedebut;



    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Please, upload the photo.")
     *  @Assert\File(mimeTypes={ "image/png", "image/jpeg" , "image/jpg" })
     */
    private $photo;



    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDateFin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }



    public function getIdevent(): ?int
    {
        return $this->idevent;
    }
    public function setIdevent(string $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(string $heure): self
    {
        $this->heure= $heure;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }


    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }


    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
    public function __toString()
    {
        return (string)$this->getIdevent();
    }
    /**
     *
     * @ORM\OneToMany(targetEntity=Ticket::class, mappedBy="idevent",cascade={"remove"}, orphanRemoval=true)
     */
    private $ticket;

    public function __construct()
    {
        $this->ticket = new ArrayCollection();
    }
    /**
     * @return Collection|Ticket[]
     */
    public function getTicket(): Collection
    {
        return $this->ticket;
    }



    /**
     * @ORM\OneToMany(targetEntity=Participation::class, mappedBy="idevent",cascade={"remove"}, orphanRemoval=true )
     */
    private $Participation;

    public function __construct1()
    {
        $this->participation = new ArrayCollection();
    }




}
