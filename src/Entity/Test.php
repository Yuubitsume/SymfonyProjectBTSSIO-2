<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $nom_eleve = null;

    #[ORM\Column(length: 40)]
    private ?string $prenom_eleve = null;

    #[ORM\Column(length: 40)]
    private ?string $nom_matiÃere = null;

    #[ORM\Column(nullable: true)]
    private ?float $note = null;

    #[ORM\Column]
    private ?int $coefficient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEleve(): ?string
    {
        return $this->nom_eleve;
    }

    public function setNomEleve(string $nom_eleve): self
    {
        $this->nom_eleve = $nom_eleve;

        return $this;
    }

    public function getPrenomEleve(): ?string
    {
        return $this->prenom_eleve;
    }

    public function setPrenomEleve(string $prenom_eleve): self
    {
        $this->prenom_eleve = $prenom_eleve;

        return $this;
    }

    public function getNomMatiÃere(): ?string
    {
        return $this->nom_matiÃere;
    }

    public function setNomMatiÃere(string $nom_matiÃere): self
    {
        $this->nom_matiÃere = $nom_matiÃere;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(?float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCoefficient(): ?int
    {
        return $this->coefficient;
    }

    public function setCoefficient(int $coefficient): self
    {
        $this->coefficient = $coefficient;

        return $this;
    }
}
