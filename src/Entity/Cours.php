<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Form\Extension\Core\Type\DateTimeInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
   
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idcours;

    /**
     *  
     *     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Your cours name must be at least {{ limit }} characters long",
     *      maxMessage = "Your cours name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $nomcours;

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
    private $descriptioncours;

  

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
      * @ORM\Column(type="datetime")
     */
    private $dateheure;


      /**
     * @ORM\ManyToOne(targetEntity=Category::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idcategory",referencedColumnName="idcategory",nullable=false)
     */
    private $idcategory;

   


    public function getIdCours(): ?int
    {
        return $this->idcours;
    }

    public function getNomCours(): ?string
    {
        return $this->nomcours;
    }

    public function setNomCours(string $nomcours): self
    {
        $this->nomcours = $nomcours;

        return $this;
    }

    public function getDescriptionCours(): ?string
    {
        return $this->descriptioncours;
    }

    public function setDescriptionCours(string $descriptioncours): self
    {
        $this->descriptioncours = $descriptioncours;

        return $this;
    }

    public function __construct()
    {
        $this->category = new ArrayCollection();
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
    public function getDateHeure(): ?\DateTimeInterface
    {
        return $this->dateheure;
    }

    public function setDateHeure(\DateTimeInterface $dateheure): self
    {
        $this->dateheure = $dateheure;

        return $this;
    }
    
    public function getIdCategory(): ?Category
    {
        return $this->idcategory;
    }
    public function setIdCategory(?Category $idcategory): self
    {
        $this->idcategory = $idcategory;

        return $this;
    }


    public function __toString()
    {
        return (string)$this->getIdCategory();
    }
     /**
     * @return Collection|Category[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

   
}