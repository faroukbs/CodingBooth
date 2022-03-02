<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table(name="emploi", indexes={@ORM\Index(name="fk21", columns={"idcours"}), @ORM\Index(name="fk22", columns={"id_coach"}), @ORM\Index(name="fk20", columns={"idsalle"})})
 * @ORM\Entity
 */
class Emploi
{
    /**
     * @var int
     *
     * @ORM\Column(name="idemploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemploi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsalle", referencedColumnName="id_salle")
     * })
     */
    private $idsalle;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_coach", referencedColumnName="idutilisateur")
     * })
     */
    private $idCoach;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcours", referencedColumnName="idcours")
     * })
     */
    private $idcours;

    public function getIdemploi(): ?int
    {
        return $this->idemploi;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getIdsalle(): ?Salle
    {
        return $this->idsalle;
    }

    public function setIdsalle(?Salle $idsalle): self
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    public function getIdCoach(): ?Utilisateur
    {
        return $this->idCoach;
    }

    public function setIdCoach(?Utilisateur $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }

    public function getIdcours(): ?Cours
    {
        return $this->idcours;
    }

    public function setIdcours(?Cours $idcours): self
    {
        $this->idcours = $idcours;

        return $this;
    }


}
