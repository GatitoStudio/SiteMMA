<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Offredestage
 *
 * @ORM\Table(name="offredestage")
 * @ORM\Entity
 */
class Offredestage
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=250, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DatePublication", type="datetime", nullable=false)
     */
    private $datepublication;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionDetail", type="string", length=500, nullable=false)
     */
    private $descriptiondetail;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_entreprise", type="string", length=500, nullable=false)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=500, nullable=false)
     */
    private $ville;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Annee", type="datetime", nullable=false)
     */
    private $annee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fichier", inversedBy="idContient")
     * @ORM\JoinTable(name="contient",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_contient", referencedColumnName="Id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Fichier", referencedColumnName="Id")
     *   }
     * )
     */
    private $idFichier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFichier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDatepublication(): ?\DateTimeInterface
    {
        return $this->datepublication;
    }

    public function setDatepublication(\DateTimeInterface $datepublication): self
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptiondetail(): ?string
    {
        return $this->descriptiondetail;
    }

    public function setDescriptiondetail(string $descriptiondetail): self
    {
        $this->descriptiondetail = $descriptiondetail;

        return $this;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    public function setNomEntreprise(string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * @return Collection|Fichier[]
     */
    public function getIdFichier(): Collection
    {
        return $this->idFichier;
    }

    public function addIdFichier(Fichier $idFichier): self
    {
        if (!$this->idFichier->contains($idFichier)) {
            $this->idFichier[] = $idFichier;
        }

        return $this;
    }

    public function removeIdFichier(Fichier $idFichier): self
    {
        if ($this->idFichier->contains($idFichier)) {
            $this->idFichier->removeElement($idFichier);
        }

        return $this;
    }

}
