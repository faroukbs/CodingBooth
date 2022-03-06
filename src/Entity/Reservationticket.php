<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationticket
 *
 * @ORM\Table(name="reservationticket", indexes={@ORM\Index(name="fk12", columns={"iduser"}), @ORM\Index(name="fk11", columns={"idticket"})})
 * @ORM\Entity
 */
class Reservationticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="idreservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var int
     *
     * @ORM\Column(name="quatite", type="integer", nullable=false)
     */
    private $quatite;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="idutilisateur")
     * })
     */
    private $iduser;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idticket", referencedColumnName="idticket")
     * })
     */
    private $idticket;

    public function getIdreservation(): ?int
    {
        return $this->idreservation;
    }

    public function getQuatite(): ?int
    {
        return $this->quatite;
    }

    public function setQuatite(int $quatite): self
    {
        $this->quatite = $quatite;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdticket(): ?Ticket
    {
        return $this->idticket;
    }

    public function setIdticket(?Ticket $idticket): self
    {
        $this->idticket = $idticket;

        return $this;
    }


}
