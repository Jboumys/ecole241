<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DossierRepository")
 */
class Dossier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $matricule;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreate;

    /**
     * @ORM\Column(type="date")
     */
    private $dateMAJ;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Requerant", inversedBy="dossiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $requerant;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Fichier", mappedBy="dossier")
     */
    private $fichiers;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Parcelle", mappedBy="dossier", cascade={"persist", "remove"})
     */
    private $parcelle;


    public function __construct()
    {
        $this->fichiers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->dateCreate;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getDateMAJ(): ?\DateTimeInterface
    {
        return $this->dateMAJ;
    }

    public function setDateMAJ(\DateTimeInterface $dateMAJ): self
    {
        $this->dateMAJ = $dateMAJ;

        return $this;
    }

    public function getRequerant(): ?Requerant
    {
        return $this->requerant;
    }

    public function setRequerant(?Requerant $requerant): self
    {
        $this->requerant = $requerant;

        return $this;
    }

    /**
     * @return Collection|Fichier[]
     */
    public function getFichiers(): Collection
    {
        return $this->fichiers;
    }

    public function addFichier(Fichier $fichier): self
    {
        if (!$this->fichiers->contains($fichier)) {
            $this->fichiers[] = $fichier;
            $fichier->setDossier($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): self
    {
        if ($this->fichiers->contains($fichier)) {
            $this->fichiers->removeElement($fichier);
            // set the owning side to null (unless already changed)
            if ($fichier->getDossier() === $this) {
                $fichier->setDossier(null);
            }
        }

        return $this;
    }

    public function getParcelle(): ?Parcelle
    {
        return $this->parcelle;
    }

    public function setParcelle(Parcelle $parcelle): self
    {
        $this->parcelle = $parcelle;

        // set the owning side of the relation if necessary
        if ($this !== $parcelle->getDossier()) {
            $parcelle->setDossier($this);
        }

        return $this;
    }

    /*
     * Method evaluation number folder
     */
    public function getNombreDossier(){

    }






}
