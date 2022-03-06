<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var int
     *
     * @ORM\Column(name="nomcours", type="integer", nullable=false)
     */
    private $nomcours;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriecours", type="string", length=255, nullable=false)
     */
    private $categoriecours;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    public function getIdcours(): ?int
    {
        return $this->idcours;
    }

    public function getNomcours(): ?int
    {
        return $this->nomcours;
    }

    public function setNomcours(int $nomcours): self
    {
        $this->nomcours = $nomcours;

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

    public function getCategoriecours(): ?string
    {
        return $this->categoriecours;
    }

    public function setCategoriecours(string $categoriecours): self
    {
        $this->categoriecours = $categoriecours;

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


}
