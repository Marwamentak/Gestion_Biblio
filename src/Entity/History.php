<?php

namespace App\Entity;

use App\Enum\HistoryAction;

use App\Repository\HistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoryRepository::class)]
class History
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_historique = null;

    #[ORM\Column(enumType: HistoryAction::class)]
    private ?string $action = null;

    #[ORM\ManyToOne(inversedBy: 'histories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Borrowing $borrowing_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHistorique(): ?\DateTimeInterface
    {
        return $this->date_historique;
    }

    public function setDateHistorique(\DateTimeInterface $date_historique): static
    {
        $this->date_historique = $date_historique;

        return $this;
    }

    public function getAction(): ?HistoryAction
    {
        return $this->action;
    }

    public function setAction(HistoryAction $action): static
    {
        $this->action = $action;

        return $this;
    }

    public function getBorrowingId(): ?Borrowing
    {
        return $this->borrowing_id;
    }

    public function setBorrowingId(?Borrowing $borrowing_id): static
    {
        $this->borrowing_id = $borrowing_id;

        return $this;
    }
}
