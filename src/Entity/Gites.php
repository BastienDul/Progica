<?php

namespace App\Entity;

use App\Repository\GitesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GitesRepository::class)]
class Gites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;


    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column]
    private ?float $surfacehHabitable = null;

    #[ORM\Column]
    private ?int $nombreChambres = null;

    #[ORM\Column]
    private ?int $nombreCouchage = null;

    #[ORM\Column]
    private ?bool $accepteAnimaux = null;

    #[ORM\ManyToOne(inversedBy: 'proprietaires')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proprietaires $proprietaires = null;

    #[ORM\ManyToOne(inversedBy: 'contact')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contact $contact = null;

    #[ORM\OneToMany(mappedBy: 'gites', targetEntity: Equipements::class)]
    private Collection $equipement;

    #[ORM\OneToMany(mappedBy: 'gites', targetEntity: TarifLocation::class)]
    private Collection $tarifLocation;

    #[ORM\OneToMany(mappedBy: 'gites', targetEntity: TarifAnimaux::class)]
    private Collection $tarifAnimaux;

    public function __construct()
    {
        $this->equipement = new ArrayCollection();
        $this->tarifLocation = new ArrayCollection();
        $this->tarifAnimaux = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getSurfacehHabitable(): ?float
    {
        return $this->surfacehHabitable;
    }

    public function setSurfacehHabitable(float $surfacehHabitable): static
    {
        $this->surfacehHabitable = $surfacehHabitable;

        return $this;
    }

    public function getNombreChambres(): ?int
    {
        return $this->nombreChambres;
    }

    public function setNombreChambres(int $nombreChambres): static
    {
        $this->nombreChambres = $nombreChambres;

        return $this;
    }

    public function getNombreCouchage(): ?int
    {
        return $this->nombreCouchage;
    }

    public function setNombreCouchage(int $nombreCouchage): static
    {
        $this->nombreCouchage = $nombreCouchage;

        return $this;
    }

    public function isAccepteAnimaux(): ?bool
    {
        return $this->accepteAnimaux;
    }

    public function setAccepteAnimaux(bool $accepteAnimaux): static
    {
        $this->accepteAnimaux = $accepteAnimaux;

        return $this;
    }


    /**
     * Get the value of proprietaires
     */ 
    public function getProprietaires()
    {
        return $this->proprietaires;
    }

    /**
     * Set the value of proprietaires
     *
     * @return  self
     */ 
    public function setProprietaires($proprietaires)
    {
        $this->proprietaires = $proprietaires;

        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return Collection<int, equipements>
     */
    public function getGite(): Collection
    {
        return $this->equipement;
    }

    /**
     * @return Collection<int, tarifLocation>
     */
    public function getTarifLocation(): Collection
    {
        return $this->tarifLocation;
    }

    public function addTarifLocation(tarifLocation $tarifLocation): static
    {
        if (!$this->tarifLocation->contains($tarifLocation)) {
            $this->tarifLocation->add($tarifLocation);
            $tarifLocation->setGites($this);
        }

        return $this;
    }

    public function removeTarifLocation(tarifLocation $tarifLocation): static
    {
        if ($this->tarifLocation->removeElement($tarifLocation)) {
            // set the owning side to null (unless already changed)
            if ($tarifLocation->getGites() === $this) {
                $tarifLocation->setGites(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, tarifAnimaux>
     */
    public function getTarifAnimaux(): Collection
    {
        return $this->tarifAnimaux;
    }

    public function addTarifAnimaux(tarifAnimaux $tarifAnimaux): static
    {
        if (!$this->tarifAnimaux->contains($tarifAnimaux)) {
            $this->tarifAnimaux->add($tarifAnimaux);
            $tarifAnimaux->setGites($this);
        }

        return $this;
    }

    public function removeTarifAnimaux(tarifAnimaux $tarifAnimaux): static
    {
        if ($this->tarifAnimaux->removeElement($tarifAnimaux)) {
            // set the owning side to null (unless already changed)
            if ($tarifAnimaux->getGites() === $this) {
                $tarifAnimaux->setGites(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of equipement
     */ 
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set the value of equipement
     *
     * @return  self
     */ 
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }
}
