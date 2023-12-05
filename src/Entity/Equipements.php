<?php

namespace App\Entity;

use App\Repository\EquipementsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementsRepository::class)]
class Equipements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $laveVaiselle = null;

    #[ORM\Column]
    private ?bool $laveLinge = null;

    #[ORM\Column]
    private ?bool $climatisation = null;

    #[ORM\Column]
    private ?bool $television = null;

    #[ORM\Column]
    private ?bool $terrasse = null;

    #[ORM\Column]
    private ?bool $bbq = null;

    #[ORM\Column]
    private ?bool $piscinePrivee = null;

    #[ORM\Column]
    private ?bool $piscinePublic = null;

    #[ORM\Column]
    private ?bool $tennis = null;

    #[ORM\Column]
    private ?bool $pingPong = null;

    #[ORM\ManyToOne(inversedBy: 'gite')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gites $gites = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isLaveVaiselle(): ?bool
    {
        return $this->laveVaiselle;
    }

    public function setLaveVaiselle(bool $laveVaiselle): static
    {
        $this->laveVaiselle = $laveVaiselle;

        return $this;
    }

    public function isLaveLinge(): ?bool
    {
        return $this->laveLinge;
    }

    public function setLaveLinge(bool $laveLinge): static
    {
        $this->laveLinge = $laveLinge;

        return $this;
    }

    public function isClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    public function setClimatisation(bool $climatisation): static
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    public function isTelevision(): ?bool
    {
        return $this->television;
    }

    public function setTelevision(bool $television): static
    {
        $this->television = $television;

        return $this;
    }

    public function isTerrasse(): ?bool
    {
        return $this->terrasse;
    }

    public function setTerrasse(bool $terrasse): static
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    public function isBbq(): ?bool
    {
        return $this->bbq;
    }

    public function setBbq(bool $bbq): static
    {
        $this->bbq = $bbq;

        return $this;
    }

    public function isPiscinePrivee(): ?bool
    {
        return $this->piscinePrivee;
    }

    public function setPiscinePrivee(bool $piscinePrivee): static
    {
        $this->piscinePrivee = $piscinePrivee;

        return $this;
    }

    public function isPiscinePublic(): ?bool
    {
        return $this->piscinePublic;
    }

    public function setPiscinePublic(bool $piscinePublic): static
    {
        $this->piscinePublic = $piscinePublic;

        return $this;
    }

    public function isTennis(): ?bool
    {
        return $this->tennis;
    }

    public function setTennis(bool $tennis): static
    {
        $this->tennis = $tennis;

        return $this;
    }

    public function isPingPong(): ?bool
    {
        return $this->pingPong;
    }

    public function setPingPong(bool $pingPong): static
    {
        $this->pingPong = $pingPong;

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
