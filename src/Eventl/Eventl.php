<?php

namespace App\Eventl;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventl
 *
 * @ORM\Table(name="eventl")
 * @ORM\Entity
 */
class Eventl
{
    /**
     * @var int
     *
     * @ORM\Column(name="idevent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevent;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=255, nullable=false)
     */
    private $heure;

    /**
     * @var int
     *
     * @ORM\Column(name="evaluation", type="integer", nullable=false)
     */
    private $evaluation;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_participants", type="integer", nullable=false)
     */
    private $nombreParticipants;

    /**
     * @var int
     *
     * @ORM\Column(name="view", type="integer", nullable=false)
     */
    private $view;


}
