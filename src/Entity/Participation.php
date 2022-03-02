<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="fk2", columns={"idevent"}), @ORM\Index(name="fk1", columns={"iduser"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idparticipation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparticipation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateparticipation", type="datetime", nullable=false)
     */
    private $dateparticipation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    /**
     * @var \Eventl
     *
     * @ORM\ManyToOne(targetEntity="Eventl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idevent", referencedColumnName="idevent")
     * })
     */
    private $idevent;

    public function getIdparticipation(): ?int
    {
        return $this->idparticipation;
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


}
