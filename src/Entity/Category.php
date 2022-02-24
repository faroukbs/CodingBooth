<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue                                               
     * @ORM\Column(type="integer")
     */
    private $idcategory;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomcategory;
    



    public function getIdCategory(): ?int
    {
        return $this->idcategory;
    }
    public function setIdCategory(string $idcategory): self
    {
        $this->idcategory = $idcategory;

        return $this;
    }
    public function getNomcategory(): ?string
    {
        return $this->nomcategory;
    }

    public function setNomcategory(string $nomcategory): self
    {
        $this->nomcategory = $nomcategory;

        return $this;
    }
    public function __toString()
    {
        return (string)$this->getIdCategory();
    }
    /**
     *
     * @ORM\OneToMany(targetEntity=Cours::class, mappedBy="idcategory",cascade={"remove"}, orphanRemoval=true)
     */
    private $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
    }
    /**
     * @return Collection|Cours[]
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }
}
