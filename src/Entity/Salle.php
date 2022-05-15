<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\SalleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=SalleRepository::class)
 */
class Salle
{
    /**

     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("salle:read")
     */
    private $idsalle;

    /**
     *
     *     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Your salle name must be at least {{ limit }} characters long",
     *      maxMessage = "Your salle name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=255)
     *  @Groups("salle:read")
     */
    private $nomsalle;

    /**
     *     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Your description must be at least {{ limit }} characters long",
     *      minMessage = "Your description must be at least {{ limit }} characters long",
     *      maxMessage = "Your description cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=255)
     *  @Groups("salle:read")
     */
    private $description;



    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups("salle:read")
     */
    private $materiel;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups("salle:read")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idcategorie",referencedColumnName="idcategorie",nullable=false)
     * @Groups("salle:read")
     */
    private $idcategorie;

    public function getIdSalle(): ?int
    {
        return $this->idsalle;
    }

    public function getNomsalle(): ?string
    {
        return $this->nomsalle;
    }

    public function setNomsalle(string $nomsalle): self
    {
        $this->nomsalle = $nomsalle;

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


    public function getMateriel(): ?string
    {
        return $this->materiel;
    }

    public function setMateriel(string $materiel): self
    {
        $this->materiel = $materiel;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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

    public function __toStringC()
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
    public function __ToString()
    {
        return (string)$this->getIdSalle();
    }
    /**
     *
     * @ORM\OneToMany(targetEntity=Calendar::class, mappedBy="idsalle",cascade={"remove"}, orphanRemoval=true)
     */
    private $calendar;

    public function __construct()
    {
        $this->calendar = new ArrayCollection();
    }
    /**
     * @return Collection|Calendar[]
     */
    public function getCalendar(): Collection
    {
        return $this->calendar;
    }
}
