<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("salle:read")
     */
    private $idcategorie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("salle:read")
     */
    private $nomcategorie;




    public function getIdCategorie(): ?int
    {
        return $this->idcategorie;
    }
    public function setIdCategorie(string $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }
    public function getNomcategorie(): ?string
    {
        return $this->nomcategorie;
    }

    public function setNomcategorie(string $nomcategorie): self
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }
    public function __toString()
    {
        return (string)$this->getIdCategorie();
    }
    /**
     *
     * @ORM\OneToMany(targetEntity=Calendar::class, mappedBy="idcategorie",cascade={"remove"}, orphanRemoval=true)
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
    /**
     *
     * @ORM\OneToMany(targetEntity=Salle::class, mappedBy="idcategorie",cascade={"remove"}, orphanRemoval=true)

     */
    private $salle;

    public function __constructS()
    {
        $this->salle = new ArrayCollection();
    }
    /**
     * @return Collection|Salle[]
     */
    public function getSalle(): Collection
    {
        return $this->salle;
    }
}
