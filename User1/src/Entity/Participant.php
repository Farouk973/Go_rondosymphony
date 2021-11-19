<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant", uniqueConstraints={@ORM\UniqueConstraint(name="usernameunique", columns={"username_par"}), @ORM\UniqueConstraint(name="cinunique", columns={"cin_par"}), @ORM\UniqueConstraint(name="numtelunique", columns={"numtel_par"}), @ORM\UniqueConstraint(name="mailunique", columns={"mail_par"})})
 * @ORM\Entity
 */
class Participant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_par", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPar;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_par", type="string", length=50, nullable=false)
     */
    private $cinPar;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_par", type="string", length=50, nullable=false)
     */
    private $nomPar;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_par", type="string", length=50, nullable=false)
     */
    private $prenomPar;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe_par", type="string", length=50, nullable=false)
     */
    private $sexePar;

    /**
     * @var string
     *
     * @ORM\Column(name="age_par", type="string", length=50, nullable=false)
     */
    private $agePar;

    /**
     * @var string
     *
     * @ORM\Column(name="username_par", type="string", length=50, nullable=false)
     */
    private $usernamePar;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_par", type="string", length=50, nullable=false)
     */
    private $mdpPar;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel_par", type="string", length=50, nullable=false)
     */
    private $numtelPar;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_par", type="string", length=255, nullable=false)
     */
    private $adressPar;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_par", type="string", length=70, nullable=false)
     */
    private $mailPar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_group", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $idGroup = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Date_inscri", type="string", length=80, nullable=false)
     */
    private $dateInscri;

    /**
     * @return int
     */
    public function getIdPar(): int
    {
        return $this->idPar;
    }

    /**
     * @param int $idPar
     */
    public function setIdPar(int $idPar): void
    {
        $this->idPar = $idPar;
    }

    /**
     * @return string
     */
    public function getCinPar(): ?string
    {
        return $this->cinPar;
    }

    /**
     * @param string $cinPar
     */
    public function setCinPar(string $cinPar): void
    {
        $this->cinPar = $cinPar;
    }

    /**
     * @return string
     */
    public function getNomPar(): ?string
    {
        return $this->nomPar;
    }

    /**
     * @param string $nomPar
     */
    public function setNomPar(string $nomPar): void
    {
        $this->nomPar = $nomPar;
    }

    /**
     * @return string
     */
    public function getPrenomPar(): ?string
    {
        return $this->prenomPar;
    }

    /**
     * @param string $prenomPar
     */
    public function setPrenomPar(string $prenomPar): void
    {
        $this->prenomPar = $prenomPar;
    }

    /**
     * @return string
     */
    public function getSexePar(): ?string
    {
        return $this->sexePar;
    }

    /**
     * @param string $sexePar
     */
    public function setSexePar(string $sexePar): void
    {
        $this->sexePar = $sexePar;
    }

    /**
     * @return string
     */
    public function getAgePar(): ?string
    {
        return $this->agePar;
    }

    /**
     * @param string $agePar
     */
    public function setAgePar(string $agePar): void
    {
        $this->agePar = $agePar;
    }

    /**
     * @return string
     */
    public function getUsernamePar(): ?string
    {
        return $this->usernamePar;
    }

    /**
     * @param string $usernamePar
     */
    public function setUsernamePar(string $usernamePar): void
    {
        $this->usernamePar = $usernamePar;
    }

    /**
     * @return string
     */
    public function getMdpPar(): ?string
    {
        return $this->mdpPar;
    }

    /**
     * @param string $mdpPar
     */
    public function setMdpPar(string $mdpPar): void
    {
        $this->mdpPar = $mdpPar;
    }

    /**
     * @return string
     */
    public function getNumtelPar(): ?string
    {
        return $this->numtelPar;
    }

    /**
     * @param string $numtelPar
     */
    public function setNumtelPar(string $numtelPar): void
    {
        $this->numtelPar = $numtelPar;
    }

    /**
     * @return string
     */
    public function getAdressPar(): ?string
    {
        return $this->adressPar;
    }

    /**
     * @param string $adressPar
     */
    public function setAdressPar(string $adressPar): void
    {
        $this->adressPar = $adressPar;
    }

    /**
     * @return string
     */
    public function getMailPar(): ?string
    {
        return $this->mailPar;
    }

    /**
     * @param string $mailPar
     */
    public function setMailPar(string $mailPar): void
    {
        $this->mailPar = $mailPar;
    }

    /**
     * @return string|null
     */
    public function getIdGroup(): ?string
    {
        return $this->idGroup;
    }

    /**
     * @param string|null $idGroup
     */
    public function setIdGroup(?string $idGroup): void
    {
        $this->idGroup = $idGroup;
    }

    /**
     * @return string
     */
    public function getDateInscri(): ?string
    {
        return $this->dateInscri;
    }

    /**
     * @param string $dateInscri
     */
    public function setDateInscri(string $dateInscri): void
    {
        $this->dateInscri = $dateInscri;
    }


}
