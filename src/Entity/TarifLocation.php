<?php

namespace App\Entity;

use App\Repository\TarifLocationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifLocationRepository::class)]
class TarifLocation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $periodeDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $periodeFin = null;

    #[ORM\Column]
    private ?float $tarifHebdomadaire = null;

    #[ORM\ManyToOne(inversedBy: 'tarifLocation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gites $gites = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPeriodeDebut(): ?\DateTimeInterface
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(\DateTimeInterface $periodeDebut): static
    {
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTimeInterface
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(\DateTimeInterface $periodeFin): static
    {
        $this->periodeFin = $periodeFin;

        return $this;
    }

    public function getTarifHebdomadaire(): ?float
    {
        return $this->tarifHebdomadaire;
    }

    public function setTarifHebdomadaire(float $tarifHebdomadaire): static
    {
        $this->tarifHebdomadaire = $tarifHebdomadaire;

        return $this;
    }

    public function getGites(): ?Gites
    {
        return $this->gites;
    }

    public function setGites(?Gites $gites): static
    {
        $this->gites = $gites;

        return $this;
    }
}
