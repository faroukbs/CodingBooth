<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\TicketRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use symfony\component\Serialiezer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TicketRepository::class)
 */
class Ticket
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idticket;

    /**
     * @ORM\ManyToOne(targetEntity=Eventl::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idevent",referencedColumnName="idevent",nullable=false)
     */
    private $idevent;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Please, upload the photo.")
     *  @Assert\File(mimeTypes={ "image/png", "image/jpeg" , "image/jpg" })
     */
    private $image;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeticket;

    /**
     * @ORM\Column(type="float", length=255)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;



    public function __construct()
    {
        $this->eventl = new ArrayCollection();
    }

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function getTypeticket(): ?string
    {
        return $this->typeticket;
    }

    public function setTypeticket(string $typeticket): self
    {
        $this->typeticket = $typeticket;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function __toString()
    {
        return (string)$this->getIdevent();
    }

    /**
     * @return Collection|Eventl[]
     */
    public function getEventl(): Collection
    {
        return $this->eventl;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    /**
     * @return Collection|Reservation[]
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="idticket",cascade={"remove"}, orphanRemoval=true )
     */
    private $reservation;

    public function __construct2()
    {
        $this->reservation = new ArrayCollection();
    }

}
