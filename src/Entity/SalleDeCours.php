<?php

namespace App\Entity;

use App\Repository\SalleDeCoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalleDeCoursRepository::class)
 */
class SalleDeCours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_salle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $desc_salle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_salle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSalle(): ?string
    {
        return $this->nom_salle;
    }

    public function setNomSalle(string $nom_salle): self
    {
        $this->nom_salle = $nom_salle;

        return $this;
    }

    public function getDescSalle(): ?string
    {
        return $this->desc_salle;
    }

    public function setDescSalle(string $desc_salle): self
    {
        $this->desc_salle = $desc_salle;

        return $this;
    }

    public function getImageSalle(): ?string
    {
        return $this->image_salle;
    }

    public function setImageSalle(string $image_salle): self
    {
        $this->image_salle = $image_salle;

        return $this;
    }
}
