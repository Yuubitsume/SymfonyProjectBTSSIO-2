<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $libellé = null;

    #[ORM\OneToMany(mappedBy: 'matiere', targetEntity: NoteControle::class)]
    private Collection $noteControles;

    public function __construct()
    {
        $this->noteControles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellé(): ?string
    {
        return $this->libellé;
    }

    public function setLibellé(string $libellé): self
    {
        $this->libellé = $libellé;

        return $this;
    }

    /**
     * @return Collection<int, NoteControle>
     */
    public function getNoteControles(): Collection
    {
        return $this->noteControles;
    }

    public function addNoteControle(NoteControle $noteControle): self
    {
        if (!$this->noteControles->contains($noteControle)) {
            $this->noteControles->add($noteControle);
            $noteControle->setMatiere($this);
        }

        return $this;
    }

    public function removeNoteControle(NoteControle $noteControle): self
    {
        if ($this->noteControles->removeElement($noteControle)) {
            // set the owning side to null (unless already changed)
            if ($noteControle->getMatiere() === $this) {
                $noteControle->setMatiere(null);
            }
        }

        return $this;
    }
}
