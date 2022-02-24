<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormTypeInterface;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ParticipationRepository::class)
 */
class Participation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idparticipation;


    /**
     * @ORM\ManyToOne(targetEntity=Eventl::class)
     * @ORM\JoinColumn(name="idevent",referencedColumnName="idevent",nullable=false)
     */
    private $idevent;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="iduser",referencedColumnName="iduser",nullable=false)
     */
    private $iduser;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Date est obligatoire")
     *
     */
    private $dateparticipation;

    public function getIdparticipation(): ?int
    {
        return $this->idparticipation;
    }

    public function setIdparticipation(int $idparticipation): self
    {
        $this->idparticipation = $idparticipation;

        return $this;
    }
    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
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
    public function getDateparticipation(): ?\DateTimeInterface
    {
        return $this->dateparticipation;
    }

    public function setDateparticipation(\DateTimeInterface $dateparticipation): self
    {
        $this->dateparticipation = $dateparticipation;

        return $this;
    }
}
