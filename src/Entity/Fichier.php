<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fichier
 *
 * @ORM\Table(name="fichier")
 * @ORM\Entity(repositoryClass="App\Repository\FichierRepository")
 */
class Fichier
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
     * @ORM\Column(name="Nom", type="string", length=150, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="string", length=999, nullable=false)
     */
    private $url;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Offredestage", mappedBy="idFichier")
     */
    private $idContient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idContient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection|Offredestage[]
     */
    public function getIdContient(): Collection
    {
        return $this->idContient;
    }

    public function addIdContient(Offredestage $idContient): self
    {
        if (!$this->idContient->contains($idContient)) {
            $this->idContient[] = $idContient;
            $idContient->addIdFichier($this);
        }

        return $this;
    }

    public function removeIdContient(Offredestage $idContient): self
    {
        if ($this->idContient->contains($idContient)) {
            $this->idContient->removeElement($idContient);
            $idContient->removeIdFichier($this);
        }

        return $this;
    }

}
