<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Float_;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EvaluationRepository::class)
 */
class Evaluation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="float", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $note;
    /**
     * @ORM\ManyToOne(targetEntity=Eventl::class)
     * @ORM\JoinColumn(name="idevent",referencedColumnName="idevent",nullable=false)
     * @Groups("post:read")
     */
    private $idevent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->eventl = new ArrayCollection();
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function getIdevent(): ?Eventl
    {
        return $this->idevent;
    }


    public function setIdevent(?Eventl $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }
    /**
     * @return Collection|Eventl[]
     */
    public function getEventl(): Collection
    {
        return $this->eventl;
    }
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(?float $note): self
    {
        $this->note = $note;

        return $this;
    }
}
