<?php

namespace Zac2\Analytique2;

use Zac2\Domain\Etablissement;
use Zac2\Domain\TypeBpf;
use Zac2\Domain\TypeProduit;

trait PieceLigneTrait
{

    /** @var  string */
    protected $compte_analytique_actif;
    /** @var  string */
    protected $compte_analytique_libelle;
    /** @var  string */
    protected $compte_analytique_libelle_court;

    /**
     * @var Etablissement
     */
    protected $etablissement;
    /**
     * @var TypeProduit
     */
    protected $typeProduit;
    /**
     * @var TypeBpf
     */
    protected $typeBpf;

    /**
     * @return Etablissement
     */
    public function getEtablissement()
    {
        if ($this->etablissement->getLibelleGescicca() == 'Centre d\'Angoulême') {
            if ($this->getTypeProduit()->getAnalytiqueProduit() == 'B001') {
                $this->etablissement->setCodeComptaAnalytique('AN2');
            } else {
                $this->etablissement->setCodeComptaAnalytique('AN1');
            }
        }
        return $this->etablissement;
    }

    /**
     * @param Etablissement $etablissement
     */
    public function setEtablissement(Etablissement $etablissement)
    {
        $this->etablissement = $etablissement;
    }

    /**
     * @return TypeProduit
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * @param TypeProduit $typeProduit
     */
    public function setTypeProduit(TypeProduit $typeProduit)
    {
        $this->typeProduit = $typeProduit;
    }

    /**
     * @return TypeBpf
     */
    public function getTypeBpf()
    {
        return $this->typeBpf;
    }

    /**
     * @param TypeBpf $typeBpf
     */
    public function setTypeBpf(TypeBpf $typeBpf)
    {
        $this->typeBpf = $typeBpf;
    }

    /**
     * @return string
     */
    public function getCompteAnalytiqueActif()
    {
        return $this->compte_analytique_actif;
    }

    /**
     * @param string $compte_analytique_actif
     */
    public function setCompteAnalytiqueActif($compte_analytique_actif)
    {
        $this->compte_analytique_actif = $compte_analytique_actif;
    }

    /**
     * @return string
     */
    public function getCompteAnalytiqueLibelle()
    {
        return $this->compte_analytique_libelle;
    }

    /**
     * @param string $compte_analytique_libelle
     */
    public function setCompteAnalytiqueLibelle($compte_analytique_libelle)
    {
        $this->compte_analytique_libelle = $compte_analytique_libelle;
    }

    /**
     * @return string
     */
    public function getCompteAnalytiqueLibelleCourt()
    {
        return $this->compte_analytique_libelle_court;
    }

    /**
     * @param string $compte_analytique_libelle_court
     */
    public function setCompteAnalytiqueLibelleCourt($compte_analytique_libelle_court)
    {
        $this->compte_analytique_libelle_court = $compte_analytique_libelle_court;
    }

}
