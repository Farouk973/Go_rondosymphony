<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity
 */
class Equipement
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Produit", type="string", length=255, nullable=false)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Marque_Produit", type="string", length=255, nullable=false)
     */
    private $marqueProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie_Produit", type="string", length=255, nullable=false)
     */
    private $categorieProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="Prix_Produit", type="integer", nullable=false)
     */
    private $prixProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Produit", type="string", length=1000, nullable=true, options={"default"="NULL"})
     */
    private $descProduit = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Id_participant", type="string", length=50, nullable=true, options={"default"="'1'"})
     */
    private $idParticipant = '\'1\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sousCategory", type="string", length=50, nullable=false)
     */
    private $souscategory;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer", nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="stockDisponible", type="integer", nullable=false)
     */
    private $stockdisponible;

    /**
     * @var int
     *
     * @ORM\Column(name="Disponibility", type="integer", nullable=false)
     */
    private $disponibility;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit(int $idProduit): void
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return string
     */
    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    /**
     * @param string $nomProduit
     */
    public function setNomProduit(string $nomProduit): void
    {
        $this->nomProduit = $nomProduit;
    }

    /**
     * @return string
     */
    public function getMarqueProduit(): ?string
    {
        return $this->marqueProduit;
    }

    /**
     * @param string $marqueProduit
     */
    public function setMarqueProduit(string $marqueProduit): void
    {
        $this->marqueProduit = $marqueProduit;
    }

    /**
     * @return string
     */
    public function getCategorieProduit(): ?string
    {
        return $this->categorieProduit;
    }

    /**
     * @param string $categorieProduit
     */
    public function setCategorieProduit(string $categorieProduit): void
    {
        $this->categorieProduit = $categorieProduit;
    }

    /**
     * @return int
     */
    public function getPrixProduit():? int
    {
        return $this->prixProduit;
    }

    /**
     * @param int $prixProduit
     */
    public function setPrixProduit(int $prixProduit): void
    {
        $this->prixProduit = $prixProduit;
    }

    /**
     * @return string|null
     */
    public function getDescProduit(): ?string
    {
        return $this->descProduit;
    }

    /**
     * @param string|null $descProduit
     */
    public function setDescProduit(?string $descProduit): void
    {
        $this->descProduit = $descProduit;
    }

    /**
     * @return string|null
     */
    public function getIdParticipant(): ?string
    {
        return $this->idParticipant;
    }

    /**
     * @param string|null $idParticipant
     */
    public function setIdParticipant(?string $idParticipant): void
    {
        $this->idParticipant = $idParticipant;
    }

    /**
     * @return string
     */
    public function getSouscategory(): ?string
    {
        return $this->souscategory;
    }

    /**
     * @param string $souscategory
     */
    public function setSouscategory(string $souscategory): void
    {
        $this->souscategory = $souscategory;
    }

    /**
     * @return int
     */
    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    /**
     * @param int $nombre
     */
    public function setNombre(int $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return int
     */
    public function getStockdisponible(): ?int
    {
        return $this->stockdisponible;
    }

    /**
     * @param int $stockdisponible
     */
    public function setStockdisponible(int $stockdisponible): void
    {
        $this->stockdisponible = $stockdisponible;
    }

    /**
     * @return int
     */
    public function getDisponibility(): ?int
    {
        return $this->disponibility;
    }

    /**
     * @param int $disponibility
     */
    public function setDisponibility(int $disponibility): void
    {
        $this->disponibility = $disponibility;
    }


}
