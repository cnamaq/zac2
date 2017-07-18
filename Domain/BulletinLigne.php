<?php

namespace Zac2\Domain;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="bulletin_ligne")
 */
class BulletinLigne
{
    /**
     * @var int
     * @ORM\Id() @ORM\Column(type="integer") @ORM\GeneratedValue())
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string", name="colonne_id")
     */
    protected $colonneId;
    /**
     * @var string
     * @ORM\Column(type="string", name="compte_numero_pattern")
     */
    protected $compteNumeroPattern;
    /**
     * @var string
     * @ORM\Column(type="string", name="compte_libelle_pattern")
     */
    protected $compteLibellePattern;
    /**
     * @var string
     * @ORM\Column(type="string", name="compte_auxiliaire_pattern")
     */
    protected $compteAuxiliairePattern;
    /**
     * @var string
     * @ORM\Column(type="string", name="compte_type")
     */
    protected $compteType;
    /**
     * @var string
     * @ORM\Column(type="string", name="sens")
     */
    protected $sens;
    /**
     * @var string
     * @ORM\Column(type="string", name="caisse_libelle")
     */
    protected $caisseLibelle;
    /**
     * @var string
     * @ORM\Column(type="string", name="caisse_numero")
     */
    protected $caisseNumero;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getColonneId()
    {
        return $this->colonneId;
    }
    /**
     * @param string $colonneId
     */
    public function setColonneId($colonneId)
    {
        $this->colonneId = $colonneId;
    }

    /**
     * @return string
     */
    public function getCompteNumeroPattern()
    {
        return $this->compteNumeroPattern;
    }

    /**
     * @param string $compteNumeroPattern
     */
    public function setCompteNumeroPattern($compteNumeroPattern)
    {
        $this->compteNumeroPattern = $compteNumeroPattern;
    }

    /**
     * @return string
     */
    public function getCompteLibellePattern()
    {
        return $this->compteLibellePattern;
    }

    /**
     * @param string $compteLibellePattern
     */
    public function setCompteLibellePattern($compteLibellePattern)
    {
        $this->compteLibellePattern = $compteLibellePattern;
    }

    /**
     * @return string
     */
    public function getCompteAuxiliairePattern()
    {
        return $this->compteAuxiliairePattern;
    }

    /**
     * @param string $compteAuxiliairePattern
     */
    public function setCompteAuxiliairePattern($compteAuxiliairePattern)
    {
        $this->compteAuxiliairePattern = $compteAuxiliairePattern;
    }

    /**
     * @return string
     */
    public function getCompteType()
    {
        return $this->compteType;
    }

    /**
     * @param string $compteType
     */
    public function setCompteType($compteType)
    {
        $this->compteType = $compteType;
    }

    /**
     * @return string
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * @param string $sens
     */
    public function setSens($sens)
    {
        $this->sens = $sens;
    }

    /**
     * @return string
     */
    public function getCaisseLibelle()
    {
        return $this->caisseLibelle;
    }

    /**
     * @param string $caisseLibelle
     */
    public function setCaisseLibelle($caisseLibelle)
    {
        $this->caisseLibelle = $caisseLibelle;
    }

    /**
     * @return string
     */
    public function getCaisseNumero()
    {
        return $this->caisseNumero;
    }

    /**
     * @param string $caisseNumero
     */
    public function setCaisseNumero($caisseNumero)
    {
        $this->caisseNumero = $caisseNumero;
    }

}