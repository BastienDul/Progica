<?php

namespace App\Entity;

use App\Repository\TarifAnimauxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifAnimauxRepository::class)]
class TarifAnimaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $tarif = null;

    #[ORM\ManyToOne(inversedBy: 'tarifAnimaux')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gites $gites = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): static
    {
        $this->tarif = $tarif;

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
