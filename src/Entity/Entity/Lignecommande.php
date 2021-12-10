<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecommande
 *
 * @ORM\Table(name="lignecommande")
 * @ORM\Entity
 */
class Lignecommande
{
    /**
     * @return int
     */
    public function getIdLigneCommande(): int
    {
        return $this->idLigneCommande;
    }

    /**
     * @param int $idLigneCommande
     */
    public function setIdLigneCommande(int $idLigneCommande): void
    {
        $this->idLigneCommande = $idLigneCommande;
    }

    /**
     * @return int
     */
    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    /**
     * @param int $idCommande
     */
    public function setIdCommande(int $idCommande): void
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return int
     */
    public function getIdEquipement(): ?int
    {
        return $this->idEquipement;
    }

    /**
     * @param int $idEquipement
     */
    public function setIdEquipement(int $idEquipement): void
    {
        $this->idEquipement = $idEquipement;
    }

    /**
     * @return int
     */
    public function getPrixUnitaire(): ?int
    {
        return $this->prixUnitaire;
    }

    /**
     * @param int $prixUnitaire
     */
    public function setPrixUnitaire(int $prixUnitaire): void
    {
        $this->prixUnitaire = $prixUnitaire;
    }

    /**
     * @return int
     */
    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id_ligne_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigneCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_equipement", type="integer", nullable=false)
     */
    private $idEquipement;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_unitaire", type="integer", nullable=false)
     */
    private $prixUnitaire;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;


}
