<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



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
    private $idcommande;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     */
    private $Date;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="nom is required")
     */
    private $nom_client;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="prenom is required")
     */
    private $prenom_client;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="telephone is required")
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     * )
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="adresse is required")

     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Montant is required")

     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="mode paiement is required")

     */
    private $mode_paiement;

    /**
     * @ORM\Column(type="integer")
     */
    private $etat_commande;


    public function getIdCommande(): ?int
    {
        return $this->idcommande;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }
    public function __toString()
    {
        return (string)$this->getIdCommande();
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }


    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenom_client;
    }

    public function setPrenomClient(string $prenom_client): self
    {
        $this->prenom_client = $prenom_client;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getModePaiement(): ?string
    {
        return $this->mode_paiement;
    }

    public function setModePaiement(string $mode_paiement): self
    {
        $this->mode_paiement = $mode_paiement;

        return $this;
    }

    public function getEtatCommande(): ?int
    {
        return $this->etat_commande;
    }

    public function setEtatCommande(int $etat_commande): self
    {
        $this->etat_commande = $etat_commande;

        return $this;
    }
    /**
     * @ORM\OneToMany(targetEntity=Lignecommande::class, mappedBy="idcommande",cascade={"remove"}, orphanRemoval=true )
     */
    private $Lignecommande;

    public function __construct1()
    {
        $this->lignecommande = new ArrayCollection();
    }




}
