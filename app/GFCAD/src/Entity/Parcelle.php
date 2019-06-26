<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParcelleRepository")
 */
class Parcelle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $section;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Dossier", inversedBy="parcelle", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dossier;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cote;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ordonnee;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $abscisse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(?string $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    public function setDossier(Dossier $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getCote(): ?float
    {
        return $this->cote;
    }

    public function setCote(?float $cote): self
    {
        $this->cote = $cote;

        return $this;
    }

    public function getOrdonnee(): ?float
    {
        return $this->ordonnee;
    }

    public function setOrdonnee(?float $ordonnee): self
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }

    public function getAbscisse(): ?float
    {
        return $this->abscisse;
    }

    public function setAbscisse(?float $abscisse): self
    {
        $this->abscisse = $abscisse;

        return $this;
    }
}
