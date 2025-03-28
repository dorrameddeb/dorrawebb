<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PretRepository;

#[ORM\Entity(repositoryClass: PretRepository::class)]
#[ORM\Table(name: 'pret')]
class Pret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $ID_pret = null;

 #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "Le montant du prêt est obligatoire.")]
    #[Assert\Range(
        min: 30,
        notInRangeMessage: "Le montant du prêt doit être supérieur à 30."
    )]
    private ?float $montantPret = null;

    #[ORM\Column(type: 'date', nullable: false)]
    #[Assert\NotBlank(message: "La date du prêt est obligatoire.")]
    #[Assert\GreaterThanOrEqual("today", message: "La date du prêt doit être aujourd'hui ou dans le futur.")]
    private ?\DateTimeInterface $datePret = null;

    #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "Le TMM est obligatoire.")]
    #[Assert\PositiveOrZero(message: "Le TMM ne peut pas être négatif.")]
    private ?float $TMM = null;

 #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "Le taux est obligatoire.")]
    #[Assert\Positive(message: "Le taux doit être un nombre positif.")]
    private ?float $Taux = null;

#[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "Les revenus bruts sont obligatoires.")]
    #[Assert\Positive(message: "Les revenus bruts doivent être supérieurs à 0.")]
    private ?float $revenusBruts = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotBlank(message: "L'âge de l'employé est obligatoire.")]
    #[Assert\GreaterThan(value: 18, message: "L'âge de l'employé doit être supérieur à 18 ans.")]
    private ?int $ageEmploye = null;

#[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotBlank(message: "La durée de remboursement est obligatoire.")]
    #[Assert\Range(
        min: 1,
        max: 30,
        notInRangeMessage: "La durée de remboursement doit être comprise entre 1 et 30 ans."
    )]
    private ?int $dureeRemboursement = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La catégorie est obligatoire.")]
    private ?string $categorie = null;

    public function getID_pret(): ?int
    {
        return $this->ID_pret;
    }

    public function setID_pret(int $ID_pret): self
    {
        $this->ID_pret = $ID_pret;
        return $this;
    }

    public function getMontantPret(): ?float
    {
        return $this->montantPret;
    }

    public function setMontantPret(float $montantPret): self
    {
        $this->montantPret = $montantPret;
        return $this;
    }

    public function getDatePret(): ?\DateTimeInterface
    {
        return $this->datePret;
    }

    public function setDatePret(\DateTimeInterface $datePret): self
    {
        $this->datePret = $datePret;
        return $this;
    }

 public function getTMM(): ?float
    {
        return $this->TMM;
    }

    public function setTMM(float $TMM): self
    {
        $this->TMM = $TMM;
        return $this;
    }

 public function getTaux(): ?float
    {
        return $this->Taux;
    }

    public function setTaux(float $Taux): self
    {
        $this->Taux = $Taux;
        return $this;
    }

    public function getRevenusBruts(): ?float
    {
        return $this->revenusBruts;
    }

    public function setRevenusBruts(float $revenusBruts): self
    {
        $this->revenusBruts = $revenusBruts;
        return $this;
    }

    public function getAgeEmploye(): ?int
    {
        return $this->ageEmploye;
    }

    public function setAgeEmploye(int $ageEmploye): self
    {
        $this->ageEmploye = $ageEmploye;
        return $this;
    }

    public function getDureeRemboursement(): ?int
    {
        return $this->dureeRemboursement;
    }

    public function setDureeRemboursement(int $dureeRemboursement): self
    {
        $this->dureeRemboursement = $dureeRemboursement;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }}
