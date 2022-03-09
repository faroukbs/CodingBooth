<?php

namespace App\Entity;

use App\Repository\EventLikeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventLikeRepository::class)
 */
class EventLike
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Eventl::class,cascade={"persist"})
     * @ORM\JoinColumn(name="event",referencedColumnName="idevent",nullable=false)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="likes")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Eventl
    {
        return $this->event;
    }

    public function setEvent(?Eventl $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): self
    {
        $this->user = $user;

        return $this;
    }
}
