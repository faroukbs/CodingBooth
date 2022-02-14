<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
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
    private $nom_evenement;

    /**
     * @ORM\Column(type="date")
     */
    private $date_evenement;

    /**
     * @ORM\Column(type="date")
     */
    private $heur_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address_event;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvenement(): ?string
    {
        return $this->nom_evenement;
    }

    public function setNomEvenement(string $nom_evenement): self
    {
        $this->nom_evenement = $nom_evenement;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->date_evenement;
    }

    public function setDateEvenement(\DateTimeInterface $date_evenement): self
    {
        $this->date_evenement = $date_evenement;

        return $this;
    }

    public function getHeurEvent(): ?\DateTimeInterface
    {
        return $this->heur_event;
    }

    public function setHeurEvent(\DateTimeInterface $heur_event): self
    {
        $this->heur_event = $heur_event;

        return $this;
    }

    public function getVilleEvent(): ?string
    {
        return $this->ville_event;
    }

    public function setVilleEvent(string $ville_event): self
    {
        $this->ville_event = $ville_event;

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->description_event;
    }

    public function setDescriptionEvent(string $description_event): self
    {
        $this->description_event = $description_event;

        return $this;
    }

    public function getPhotoEvent(): ?string
    {
        return $this->photo_event;
    }

    public function setPhotoEvent(string $photo_event): self
    {
        $this->photo_event = $photo_event;

        return $this;
    }

    public function getAddressEvent(): ?string
    {
        return $this->address_event;
    }

    public function setAddressEvent(string $address_event): self
    {
        $this->address_event = $address_event;

        return $this;
    }
}
