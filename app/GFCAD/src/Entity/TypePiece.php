<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypePieceRepository")
 */
class TypePiece
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PieceIdentification", mappedBy="typePiece", orphanRemoval=true)
     */
    private $pieceIdentifications;


    public function __construct()
    {
        $this->pieceIdentifications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|PieceIdentification[]
     */
    public function getPieceIdentifications(): Collection
    {
        return $this->pieceIdentifications;
    }

    public function addPieceIdentification(PieceIdentification $pieceIdentification): self
    {
        if (!$this->pieceIdentifications->contains($pieceIdentification)) {
            $this->pieceIdentifications[] = $pieceIdentification;
            $pieceIdentification->setTypePiece($this);
        }

        return $this;
    }

    public function removePieceIdentification(PieceIdentification $pieceIdentification): self
    {
        if ($this->pieceIdentifications->contains($pieceIdentification)) {
            $this->pieceIdentifications->removeElement($pieceIdentification);
            // set the owning side to null (unless already changed)
            if ($pieceIdentification->getTypePiece() === $this) {
                $pieceIdentification->setTypePiece(null);
            }
        }

        return $this;
    }


}
