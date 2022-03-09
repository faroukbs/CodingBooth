<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue                                               
     * @ORM\Column(type="integer")
     */
    private $idcategorie;

    /**
     * @ORM\Column(type="string", length=255)
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
}
