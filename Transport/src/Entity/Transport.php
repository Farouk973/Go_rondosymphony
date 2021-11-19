<?php

namespace App\Entity;

use App\Repository\TransportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransportRepository::class)
 */
class Transport
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix_tr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_tr; /* autre table  */

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Disponibilite_tr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Id_groupe_tr; /*id randonnee : clé étrangère */

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Destination_tr;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock_tr; /* capacité */

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image_tr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixTr(): ?float
    {
        return $this->Prix_tr;
    }

    public function setPrixTr(float $Prix_tr): self
    {
        $this->Prix_tr = $Prix_tr;

        return $this;
    }

    public function getTypeTr(): ?string
    {
        return $this->Type_tr;
    }

    public function setTypeTr(string $Type_tr): self
    {
        $this->Type_tr = $Type_tr;

        return $this;
    }

    public function getDisponibiliteTr(): ?string
    {
        return $this->Disponibilite_tr;
    }

    public function setDisponibiliteTr(string $Disponibilite_tr): self
    {
        $this->Disponibilite_tr = $Disponibilite_tr;

        return $this;
    }

    public function getIdGroupeTr(): ?string
    {
        return $this->Id_groupe_tr;
    }

    public function setIdGroupeTr(string $Id_groupe_tr): self
    {
        $this->Id_groupe_tr = $Id_groupe_tr;

        return $this;
    }

    public function getDestinationTr(): ?string
    {
        return $this->Destination_tr;
    }

    public function setDestinationTr(string $Destination_tr): self
    {
        $this->Destination_tr = $Destination_tr;

        return $this;
    }

    public function getStockTr(): ?int
    {
        return $this->Stock_tr;
    }

    public function setStockTr(int $Stock_tr): self
    {
        $this->Stock_tr = $Stock_tr;

        return $this;
    }

    public function getImageTr(): ?string
    {
        return $this->Image_tr;
    }

    public function setImageTr(string $Image_tr): self
    {
        $this->Image_tr = $Image_tr;

        return $this;
    }
}
