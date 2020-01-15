<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="Nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     * @Assert\Length(min=20,minMessage="La description doit faire au minimum 20 caractères")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=900, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ImageCover", type="string", length=900, nullable=false)
     */
    private $imagecover;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixAdherent", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixadherent;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixNonAdherent", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixnonadherent;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getImagecover(): ?string
    {
        return $this->imagecover;
    }

    public function setImagecover(string $imagecover): self
    {
        $this->imagecover = $imagecover;

        return $this;
    }

    public function getPrixadherent(): ?float
    {
        return $this->prixadherent;
    }

    public function setPrixadherent(float $prixadherent): self
    {
        $this->prixadherent = $prixadherent;

        return $this;
    }

    public function getPrixnonadherent(): ?float
    {
        return $this->prixnonadherent;
    }

    public function setPrixnonadherent(float $prixnonadherent): self
    {
        $this->prixnonadherent = $prixnonadherent;

        return $this;
    }


}
