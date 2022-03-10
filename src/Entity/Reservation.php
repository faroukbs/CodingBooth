<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idreser;

    public function getIdReser(): ?int
    {
        return $this->idreser;
    }
    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class)
     * @ORM\JoinColumn(name="iduser",referencedColumnName="id",nullable=false)
     */
    private $iduser;

    /**
     * @ORM\ManyToOne(targetEntity=Ticket::class)
     * @ORM\JoinColumn(name="idticket",referencedColumnName="idticket",nullable=false)
     */
    private $idticket;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Quantity est obligatoire")
     */
    private $Quantity;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Date est obligatoire")
     *
     */
    private $datereser;




    public function getIdUser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIdUser(?Utilisateur $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdTicket(): ?Ticket
    {
        return $this->idticket;
    }


    public function setIdTicket(?Ticket $idticket): self
    {
        $this->idticket = $idticket;

        return $this;
    }


    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getDateReser(): ?\DateTimeInterface
    {
        return $this->datereser;
    }

    public function setDateReser(\DateTimeInterface $datereser): self
    {
        $this->datereser= $datereser;

        return $this;
    }
}

