<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gagnants
 *
 * @ORM\Table(name="gagnants")
 * @ORM\Entity
 */
class Gagnants
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_gagnant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGagnant;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_gagnant", type="string", length=20, nullable=false)
     */
    private $nomGagnant;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_gagnant", type="string", length=20, nullable=false)
     */
    private $prenomGagnant;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_gagnant", type="string", length=20, nullable=false)
     */
    private $adresseGagnant;

    /**
     * @var  string
     *
     * @ORM\Column(name="rate", type="string", length=10, nullable=false)
     */
    private $rate;

    /**
     * @return int
     */
    public function getIdGagnant(): int
    {
        return $this->idGagnant;
    }

    /**
     * @param int $idGagnant
     * @return Gagnants
     */
    public function setIdGagnant(int $idGagnant): Gagnants
    {
        $this->idGagnant = $idGagnant;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomGagnant(): ?string
    {
        return $this->nomGagnant;
    }

    /**
     * @param string $nomGagnant
     * @return Gagnants
     */
    public function setNomGagnant(string $nomGagnant): Gagnants
    {
        $this->nomGagnant = $nomGagnant;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenomGagnant(): ?string
    {
        return $this->prenomGagnant;
    }

    /**
     * @param string $prenomGagnant
     * @return Gagnants
     */
    public function setPrenomGagnant(string $prenomGagnant): Gagnants
    {
        $this->prenomGagnant = $prenomGagnant;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdresseGagnant(): ?string
    {
        return $this->adresseGagnant;
    }

    /**
     * @param string $adresseGagnant
     * @return Gagnants
     */
    public function setAdresseGagnant(string $adresseGagnant): Gagnants
    {
        $this->adresseGagnant = $adresseGagnant;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): ?string
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     * @return Gagnants
     */
    public function setRate(string $rate): Gagnants
    {
        $this->rate = $rate;
        return $this;
    }





}
