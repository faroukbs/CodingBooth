<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\TicketRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="fk10", columns={"idevent"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="idticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idticket;

    /**
     * @var string
     * @ORM\Column(name="typeticket", type="string", length=255, nullable=false)
     * @Groups("post:read")

     */
    private $typeticket;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", precision=10, scale=0, nullable=false)
     * @Groups("post:read")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Eventl::class,cascade={"persist"})
     * @ORM\JoinColumn(name="idevent",referencedColumnName="idevent",nullable=false)
     * @Groups("post:read")
     */
    private $idevent;


    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function setIdticket(int $idticket): ?self
    {
        $this->idticket=$idticket;
        return $this;
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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Please, upload the photo.")
     *  @Assert\File(mimeTypes={ "image/png", "image/jpeg" , "image/jpg" })
     */
    private $image;

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