<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_cours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $desc_cours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_cours;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCours(): ?string
    {
        return $this->nom_cours;
    }

    public function setNomCours(string $nom_cours): self
    {
        $this->nom_cours = $nom_cours;

        return $this;
    }

    public function getDescCours(): ?string
    {
        return $this->desc_cours;
    }

    public function setDescCours(string $desc_cours): self
    {
        $this->desc_cours = $desc_cours;

        return $this;
    }

    public function getImageCours(): ?string
    {
        return $this->image_cours;
    }

    public function setImageCours(string $image_cours): self
    {
        $this->image_cours = $image_cours;

        return $this;
    }
}
