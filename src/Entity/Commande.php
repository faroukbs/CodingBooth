<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_commande;

    /**
     * @ORM\Column(type="date")
     */
    private $date_commande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat_commande;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estpayé;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCommande(): ?int
    {
        return $this->num_commande;
    }

    public function setNumCommande(int $num_commande): self
    {
        $this->num_commande = $num_commande;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getEtatCommande(): ?string
    {
        return $this->etat_commande;
    }

    public function setEtatCommande(string $etat_commande): self
    {
        $this->etat_commande = $etat_commande;

        return $this;
    }

    public function getEstpayé(): ?bool
    {
        return $this->estpayé;
    }

    public function setEstpayé(bool $estpayé): self
    {
        $this->estpayé = $estpayé;

        return $this;
    }
}
