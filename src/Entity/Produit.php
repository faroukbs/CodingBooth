<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     * * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "least {{ limit }} characters long",
     *      maxMessage = "cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(name="nonprod", type="string", length=255, nullable=false)
     */
    private $nomprod;

    /**
     * @var string
     * 
     * 
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\Length(
     *      min = 12,
     *      
     *      minMessage = "at least {{ limit }} characters long",
     *  
     * )
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     *     
     * @Assert\Positive
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull(message="La quantité doît être différent de 0")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
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

    /**
     * @return Collection|Lignecommande[]
     */
    public function getLigneCommande(): Collection
    {
        return $this->lignecommande;
    }
    /**
     * @ORM\OneToMany(targetEntity=Lignecommande::class, mappedBy="id_produit")
     */
    private $lignecommande;
    public function __construct()
    {
        $this->lignecommande = new ArrayCollection();
    }


}
