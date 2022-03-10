<?php

namespace App\Entity;

use App\Repository\EventlikeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventlikeRepository::class)
 */
class Eventlike
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Eventl::class)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class)
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
