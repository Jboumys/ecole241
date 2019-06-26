<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequerantRepository")
 */
class Requerant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnreg;

    /**
     * @ORM\Column(type="date")
     */
    private $dateMAJ;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dossier", mappedBy="requerant")
     */
    private $dossiers;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PieceIdentification", mappedBy="requerant", cascade={"persist", "remove"})
     */
    private $pieceIdentification;

    /**
     * Requerant constructor.
     * @param $dateEnreg
     * @param $dateMAJ
     */
    public function __construct()
    {
        $this->dateEnreg = new \DateTime();
        $this->dateMAJ = new \DateTime();
        $this->dossiers = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = strtoupper($nom);

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = ucwords($prenom);

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = ucwords($nationalite);

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getDateEnreg(): ?\DateTimeInterface
    {
        return $this->dateEnreg;
    }

    public function setDateEnreg(\DateTimeInterface $dateEnreg): self
    {
        $this->dateEnreg = $dateEnreg;

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

    /**
     * @return Collection|Dossier[]
     */
    public function getDossiers(): Collection
    {
        return $this->dossiers;
    }

    public function addDossier(Dossier $dossier): self
    {
        if (!$this->dossiers->contains($dossier)) {
            $this->dossiers[] = $dossier;
            $dossier->setRequerant($this);
        }

        return $this;
    }

    public function removeDossier(Dossier $dossier): self
    {
        if ($this->dossiers->contains($dossier)) {
            $this->dossiers->removeElement($dossier);
            // set the owning side to null (unless already changed)
            if ($dossier->getRequerant() === $this) {
                $dossier->setRequerant(null);
            }
        }

        return $this;
    }

    public function getIdentite(){

        $identite = $this->getNom().' '.$this->getPrenom();

        return $identite;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = strtoupper($adresse);

        return $this;
    }

    public function getPieceIdentification(): ?PieceIdentification
    {
        return $this->pieceIdentification;
    }

    public function setPieceIdentification(PieceIdentification $pieceIdentification): self
    {
        $this->pieceIdentification = $pieceIdentification;

        // set the owning side of the relation if necessary
        if ($this !== $pieceIdentification->getRequerant()) {
            $pieceIdentification->setRequerant($this);
        }

        return $this;
    }

}

