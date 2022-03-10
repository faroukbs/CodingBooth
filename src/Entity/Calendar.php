<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\CalendarRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CalendarRepository::class)
 */
class Calendar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

        /**
     *     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Your description must be at least {{ limit }} characters long",
     *      minMessage = "Your description must be at least {{ limit }} characters long",
     *      maxMessage = "Your description cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $imagecours;

      /**
     * @ORM\ManyToOne(targetEntity=Categorie::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idcategorie",referencedColumnName="idcategorie",nullable=false)
     */
    private $idcategorie;
    
      /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idcoach",referencedColumnName="id",nullable=false)
     */
    private $idcoach;

          /**
     * @ORM\ManyToOne(targetEntity=Salle::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idsalle",referencedColumnName="idsalle",nullable=false)
     */
    private $idsalle;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $all_day;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $background_color;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $border_color;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $text_color;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImageCours()
    {
        return $this->imagecours;
    }

    public function setImageCours($imagecours)
    {
        $this->imagecours = $imagecours;

        return $this;
    }
   
    
    public function getIdCategorie(): ?Categorie
    {
        return $this->idcategorie;
    }
    public function setIdCategorie(?Categorie $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    public function getIdCoach(): ?Utilisateur
    {
        return $this->idcoach;
    }

    public function setIdCoach(?Utilisateur $idcoach): self
    {
        $this->idcoach = $idcoach;

        return $this;
    }

    public function getIdSalle(): ?Salle
    {
        return $this->idsalle;
    }
    public function setIdSalle(?Salle $idsalle): self
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    public function __toString()
    {
        return (string)$this->getIdCategorie();
    }
     /**
     * @return Collection|Categorie[]
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function salleToString()
    {
        return (string)$this->getIdSalle();
    }
     /**
     * @return Collection|Salle[]
     */
    public function getSalle(): Collection
    {
        return $this->salle;
    }
    
    public function coachToString()
    {
        return (string)$this->getId();
    }
     /**
     * @return Collection|Utilisateur[]
     */
    public function getUtilisateur(): Collection
    {
        return $this->utilisateur;
    }
    
    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

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

    public function getAllDay(): ?bool
    {
        return $this->all_day;
    }

    public function setAllDay(bool $all_day): self
    {
        $this->all_day = $all_day;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->background_color;
    }

    public function setBackgroundColor(string $background_color): self
    {
        $this->background_color = $background_color;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->border_color;
    }

    public function setBorderColor(string $border_color): self
    {
        $this->border_color = $border_color;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->text_color;
    }

    public function setTextColor(string $text_color): self
    {
        $this->text_color = $text_color;

        return $this;
    }
}
