<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annale
 *
 * @ORM\Table(name="annale")
 * @ORM\Entity(repositoryClass="App\Repository\AnnaleRepository")
 */
class Annale
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Niveau", type="string", length=2, nullable=false)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="Lien_drive", type="string", length=999, nullable=false)
     */
    private $lienDrive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getLienDrive(): ?string
    {
        return $this->lienDrive;
    }

    public function setLienDrive(string $lienDrive): self
    {
        $this->lienDrive = $lienDrive;

        return $this;
    }


}
