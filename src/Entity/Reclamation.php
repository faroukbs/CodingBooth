<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="prenom", type="integer", nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="email", type="integer", nullable=false)
     */
    private $email;

    public function getIdRec(): ?int
    {
        return $this->idRec;
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

    public function getNom(): ?int
    {
        return $this->nom;
    }

    public function setNom(int $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?int
    {
        return $this->prenom;
    }

    public function setPrenom(int $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?int
    {
        return $this->email;
    }

    public function setEmail(int $email): self
    {
        $this->email = $email;

        return $this;
    }


}
