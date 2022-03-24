<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_produit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nonprod", type="string", length=255)
     * @Groups({"Produit"})
     */
    private $nomprod;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     * @Groups({"Produit"})
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)

     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=true)
     
     */
    private $categoryprod;

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(string $nomprod): self
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCategoryprod(): ?category
    {
        return $this->categoryprod;
    }

    public function setCategoryprod(?category $category): self
    {
        $this->categoryprod = $category;

        return $this;
    }


}
