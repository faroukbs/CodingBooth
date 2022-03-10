<?php

namespace App\Entity;
use App\Entity\Utilisateur;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\EventlRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=EventlRepository::class)
 */
class Eventl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"eventl"})
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
     * @Groups({"eventl"})
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
     * @Groups({"eventl"})
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
     * @Groups({"eventl"})
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
    public function __toString2()
    {
        return (string)$this->getEvaluation();
    }
    public function __toString1()
    {
        return (string)$this->getDatedebut();
    }
    public function __toString3()
    {
        return (string)$this->getDateFin();
    }
    /**
     *
     * @ORM\OneToMany(targetEntity=Ticket::class, mappedBy="idevent",cascade={"remove"}, orphanRemoval=true)
     */
    private $ticket;

    /**
     *
     * @ORM\OneToMany(targetEntity=Evaluation::class, mappedBy="idevent",cascade={"remove"}, orphanRemoval=true)
     */
    private $evaluationr;


    /**
     * @return Collection|Ticket[]
     */
    public function getTicket(): Collection
    {
        return $this->ticket;
    }

    /**
     * @return Collection|Evaluation[]
     */
    public function getEvaluationr(): Collection
    {
        return $this->evaluationr;
    }



    /**
     * @ORM\Column(type="integer")
     */
    private $evaluation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreParticipants;

    /**
     * @ORM\Column(type="integer")
     */
    private $view;

    /**
     * @ORM\OneToMany(targetEntity=EventLike::class, mappedBy="idevent",cascade={"remove"}, orphanRemoval=true)
     */
    private $likes;

    public function __construct()
    {
        $this->likes = new ArrayCollection();
    }





    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }
    public function setEvaluation(int $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getNombreParticipants(): ?int
    {
        return $this->nombreParticipants;
    }

    public function setNombreParticipants(int $nombreParticipants): self
    {
        $this->nombreParticipants = $nombreParticipants;

        return $this;
    }

    public function getView(): ?int
    {
        return $this->view;
    }

    public function setView(int $view): self
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return Collection<int, EventLike>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(EventLike $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setEvent($this);
        }

        return $this;
    }

    public function removeLike(EventLike $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getEvent() === $this) {
                $like->setEvent(null);
            }
        }

        return $this;
    }

    public function isLikedByUser(Utilisateur $user): bool
    {
        Foreach( $this->likes as $like)
        {
            if ($like->getUser() === $user) return true;

        }
        return false;


    }



}
