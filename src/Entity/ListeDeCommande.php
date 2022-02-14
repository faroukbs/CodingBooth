<?php

namespace App\Entity;

use App\Repository\ListeDeCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ListeDeCommandeRepository::class)
 */
class ListeDeCommande
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
    private $quantité;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant_totale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantité(): ?int
    {
        return $this->quantité;
    }

    public function setQuantité(int $quantité): self
    {
        $this->quantité = $quantité;

        return $this;
    }

    public function getMontantTotale(): ?int
    {
        return $this->montant_totale;
    }

    public function setMontantTotale(int $montant_totale): self
    {
        $this->montant_totale = $montant_totale;

        return $this;
    }
}
