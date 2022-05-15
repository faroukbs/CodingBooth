<?php

namespace App\Entity;

use App\Repository\LignecommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=LignecommandeRepository::class)
 */
class Lignecommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("produit:read")
     */
    private $idlignecommande;
    /**
     * @ORM\ManyToOne(targetEntity=Commande::class)
     * @ORM\JoinColumn(name="idcommande",referencedColumnName="idcommande",nullable=false)
     * @Groups("produit:read")
     */
    private $idcommande;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(name="id_produit",referencedColumnName="id_produit",nullable=false)
     * @Groups("produit:read")
     */
    private $idProduit;

    /**
     * @ORM\Column(type="integer")
     * @Groups("produit:read")
     */
    private $quantite;

    public function getIdLigneCommande(): ?int
    {
        return $this->idlignecommande;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
    public function getIdCommande(): ?Commande
    {
        return $this->idcommande;
    }

    public function setIdCommande(?Commande $idcommande): self
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    public function getIdProduit(): ?Produit
    {
        return $this->idProduit;
    }


    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }
}
