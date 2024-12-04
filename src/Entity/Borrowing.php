<?php

namespace App\Entity;

use App\Enum\BorrowingState;

use App\Repository\BorrowingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BorrowingRepository::class)]
class Borrowing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_emprunt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_retour = null;

    #[ORM\Column(enumType: BorrowingState::class, nullable: true)]
    private ?BorrowingState $etat_retour = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_etudiant = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_etudiant = null;

    #[ORM\Column(length: 50)]
    private ?string $num_carte_etudiant = null;

    #[ORM\Column(length: 20)]
    private ?string $telephone_etudiant = null;

    #[ORM\ManyToOne(inversedBy: 'borrowings')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'borrowings')]
    private ?Book $book = null;

    /**
     * @var Collection<int, History>
     */
    #[ORM\OneToMany(targetEntity: History::class, mappedBy: 'borrowing_id')]
    private Collection $histories;

    public function __construct()
    {
        $this->histories = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->date_emprunt;
    }

    public function setDateEmprunt(\DateTimeInterface $date_emprunt): static
    {
        $this->date_emprunt = $date_emprunt;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->date_retour;
    }

    public function setDateRetour(\DateTimeInterface $date_retour): static
    {
        $this->date_retour = $date_retour;

        return $this;
    }

    public function getEtatRetour(): ?BorrowingState
    {
        return $this->etat_retour;
    }

    public function setEtatRetour(BorrowingState $etat_retour): static
    {
        $this->etat_retour = $etat_retour;

        return $this;
    }

    public function getNomEtudiant(): ?string
    {
        return $this->nom_etudiant;
    }

    public function setNomEtudiant(string $nom_etudiant): static
    {
        $this->nom_etudiant = $nom_etudiant;

        return $this;
    }

    public function getPrenomEtudiant(): ?string
    {
        return $this->prenom_etudiant;
    }

    public function setPrenomEtudiant(string $prenom_etudiant): static
    {
        $this->prenom_etudiant = $prenom_etudiant;

        return $this;
    }

    public function getNumCarteEtudiant(): ?string
    {
        return $this->num_carte_etudiant;
    }

    public function setNumCarteEtudiant(string $num_carte_etudiant): static
    {
        $this->num_carte_etudiant = $num_carte_etudiant;

        return $this;
    }

    public function getTelephoneEtudiant(): ?string
    {
        return $this->telephone_etudiant;
    }

    public function setTelephoneEtudiant(string $telephone_etudiant): static
    {
        $this->telephone_etudiant = $telephone_etudiant;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): static
    {
        $this->book = $book;

        return $this;
    }

    /**
     * @return Collection<int, History>
     */
    public function getHistories(): Collection
    {
        return $this->histories;
    }

    public function addHistory(History $history): static
    {
        if (!$this->histories->contains($history)) {
            $this->histories->add($history);
            $history->setBorrowingId($this);
        }

        return $this;
    }

    public function removeHistory(History $history): static
    {
        if ($this->histories->removeElement($history)) {
            // set the owning side to null (unless already changed)
            if ($history->getBorrowingId() === $this) {
                $history->setBorrowingId(null);
            }
        }

        return $this;
    }

    
}
