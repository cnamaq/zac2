<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class FormationUniteOuverte extends EntityAbstract
{
    /**
     * @var string
     */
    protected $formation_code;
    /**
     * @var string
     */
    protected $formation_libelle;
    /**
     * @var string
     */
    protected $annee_universitaire;
    /**
     * @var string
     */
    protected $regroupement_programme_code;
    /**
     * @var string
     */
    protected $regroupement_programme_libelle;
    /** @var  string */
    protected $compte_analytique_actif;
    /** @var  string */
    protected $compte_analytique_libelle;
    /** @var  string */
    protected $compte_analytique_libelle_court;

    /**
     * @return string
     */
    public function getFormationLibelle()
    {
        return $this->formation_libelle;
    }

    /**
     * @param string $formation_libelle
     */
    public function setFormationLibelle($formation_libelle)
    {
        $this->formation_libelle = $formation_libelle;
    }

    /**
     * @return string
     */
    public function getRegroupementProgrammeCode()
    {
        return $this->regroupement_programme_code;
    }

    /**
     * @param string $regroupement_programme_code
     */
    public function setRegroupementProgrammeCode($regroupement_programme_code)
    {
        $this->regroupement_programme_code = $regroupement_programme_code;
    }

    /**
     * @return string
     */
    public function getRegroupementProgrammeLibelle()
    {
        return $this->regroupement_programme_libelle;
    }

    /**
     * @param string $regroupement_programme_libelle
     */
    public function setRegroupementProgrammeLibelle($regroupement_programme_libelle)
    {
        $this->regroupement_programme_libelle = $regroupement_programme_libelle;
    }

    /**
     * @return string
     */
    public function getFormationCode()
    {
        return $this->formation_code;
    }

    /**
     * @param string $formation_code
     */
    public function setFormationCode($formation_code)
    {
        $this->formation_code = $formation_code;
    }

    /**
     * @return string
     */
    public function getAnneeUniversitaire()
    {
        return $this->annee_universitaire;
    }

    /**
     * @param string $annee_universitaire
     */
    public function setAnneeUniversitaire($annee_universitaire)
    {
        $this->annee_universitaire = $annee_universitaire;
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
