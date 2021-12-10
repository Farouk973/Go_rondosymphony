<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_reclam", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclam;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_reclam", type="string", length=20, nullable=false)
     */
    private $nomReclam;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_reclam", type="string", length=20, nullable=false)
     */
    private $prenomReclam;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_reclam", type="string", length=100, nullable=false)
     */
    private $adresseReclam;

    /**
     * @var string
     *
     * @ORM\Column(name="RECLAM", type="string", length=50, nullable=false)
     */
    private $reclam;

    /**
     * @return int
     */
    public function getIdReclam(): int
    {
        return $this->idReclam;
    }

    /**
     * @param int $idReclam
     * @return Reclamation
     */
    public function setIdReclam(int $idReclam): Reclamation
    {
        $this->idReclam = $idReclam;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomReclam(): ?string
    {
        return $this->nomReclam;
    }

    /**
     * @param string $nomReclam
     * @return Reclamation
     */
    public function setNomReclam(string $nomReclam): Reclamation
    {
        $this->nomReclam = $nomReclam;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenomReclam(): ?string
    {
        return $this->prenomReclam;
    }

    /**
     * @param string $prenomReclam
     * @return Reclamation
     */
    public function setPrenomReclam(string $prenomReclam): Reclamation
    {
        $this->prenomReclam = $prenomReclam;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdresseReclam(): ?string
    {
        return $this->adresseReclam;
    }

    /**
     * @param string $adresseReclam
     * @return Reclamation
     */
    public function setAdresseReclam(string $adresseReclam): Reclamation
    {
        $this->adresseReclam = $adresseReclam;
        return $this;
    }

    /**
     * @return string
     */
    public function getReclam(): ?string
    {
        return $this->reclam;
    }

    /**
     * @param string $reclam
     * @return Reclamation
     */
    public function setReclam(string $reclam): Reclamation
    {
        $this->reclam = $reclam;
        return $this;
    }
    protected $captchaCode;

    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }

}
