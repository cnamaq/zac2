<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class UniteOuverte extends EntityAbstract
{
    protected $centre_code;
    protected $annee;
    protected $annee_universitaire;
    protected $centre_libelle;
    protected $groupe_code;
    protected $groupe_libelle;
    protected $semestre_code;
    protected $semestre_libelle;
    protected $unite_numero;
    protected $unite_code;
    protected $unite_libelle1;
    protected $unite_ects;
    protected $modalite;
    protected $etat_ouverture_code;
    protected $etat_ouverture_libelle;
    protected $type_ouverture_libelle;
    protected $en_charge;
    protected $unite_ouverte_preinscription;
    protected $unite_ouverte_export_pleiad;
    protected $financeur_nom;
    protected $identifiant_pleiad;
    protected $regroupement_programme_code;
    protected $regroupement_programme_libelle;
    protected $cra_organisateur;

    /**
     * @return mixed
     */
    public function getCentreCode()
    {
        return $this->centre_code;
    }

    /**
     * @param mixed $centre_code
     */
    public function setCentreCode($centre_code)
    {
        $this->centre_code = $centre_code;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getAnneeUniversitaire()
    {
        return $this->annee_universitaire;
    }

    /**
     * @param mixed $annee_universitaire
     */
    public function setAnneeUniversitaire($annee_universitaire)
    {
        $this->annee_universitaire = $annee_universitaire;
    }

    /**
     * @return mixed
     */
    public function getCentreLibelle()
    {
        return $this->centre_libelle;
    }

    /**
     * @param mixed $centre_libelle
     */
    public function setCentreLibelle($centre_libelle)
    {
        $this->centre_libelle = $centre_libelle;
    }

    /**
     * @return mixed
     */
    public function getGroupeCode()
    {
        return $this->groupe_code;
    }

    /**
     * @param mixed $groupe_code
     */
    public function setGroupeCode($groupe_code)
    {
        $this->groupe_code = $groupe_code;
    }

    /**
     * @return mixed
     */
    public function getGroupeLibelle()
    {
        return $this->groupe_libelle;
    }

    /**
     * @param mixed $groupe_libelle
     */
    public function setGroupeLibelle($groupe_libelle)
    {
        $this->groupe_libelle = $groupe_libelle;
    }

    /**
     * @return mixed
     */
    public function getSemestreCode()
    {
        return $this->semestre_code;
    }

    /**
     * @param mixed $semestre_code
     */
    public function setSemestreCode($semestre_code)
    {
        $this->semestre_code = $semestre_code;
    }

    /**
     * @return mixed
     */
    public function getSemestreLibelle()
    {
        return $this->semestre_libelle;
    }

    /**
     * @param mixed $semestre_libelle
     */
    public function setSemestreLibelle($semestre_libelle)
    {
        $this->semestre_libelle = $semestre_libelle;
    }

    /**
     * @return mixed
     */
    public function getUniteNumero()
    {
        return $this->unite_numero;
    }

    /**
     * @param mixed $unite_numero
     */
    public function setUniteNumero($unite_numero)
    {
        $this->unite_numero = $unite_numero;
    }

    /**
     * @return mixed
     */
    public function getUniteCode()
    {
        return $this->unite_code;
    }

    /**
     * @param mixed $unite_code
     */
    public function setUniteCode($unite_code)
    {
        $this->unite_code = $unite_code;
    }

    /**
     * @return mixed
     */
    public function getUniteLibelle1()
    {
        return $this->unite_libelle1;
    }

    /**
     * @param mixed $unite_libelle1
     */
    public function setUniteLibelle1($unite_libelle1)
    {
        $this->unite_libelle1 = $unite_libelle1;
    }

    /**
     * @return mixed
     */
    public function getUniteEcts()
    {
        return $this->unite_ects;
    }

    /**
     * @param mixed $unite_ects
     */
    public function setUniteEcts($unite_ects)
    {
        $this->unite_ects = $unite_ects;
    }

    /**
     * @return mixed
     */
    public function getModalite()
    {
        return $this->modalite;
    }

    /**
     * @param mixed $modalite
     */
    public function setModalite($modalite)
    {
        $this->modalite = $modalite;
    }

    /**
     * @return mixed
     */
    public function getEtatOuvertureCode()
    {
        return $this->etat_ouverture_code;
    }

    /**
     * @param mixed $etat_ouverture_code
     */
    public function setEtatOuvertureCode($etat_ouverture_code)
    {
        $this->etat_ouverture_code = $etat_ouverture_code;
    }

    /**
     * @return mixed
     */
    public function getEtatOuvertureLibelle()
    {
        return $this->etat_ouverture_libelle;
    }

    /**
     * @param mixed $etat_ouverture_libelle
     */
    public function setEtatOuvertureLibelle($etat_ouverture_libelle)
    {
        $this->etat_ouverture_libelle = $etat_ouverture_libelle;
    }

    /**
     * @return mixed
     */
    public function getTypeOuvertureLibelle()
    {
        return $this->type_ouverture_libelle;
    }

    /**
     * @param mixed $type_ouverture_libelle
     */
    public function setTypeOuvertureLibelle($type_ouverture_libelle)
    {
        $this->type_ouverture_libelle = $type_ouverture_libelle;
    }

    /**
     * @return mixed
     */
    public function getEnCharge()
    {
        return $this->en_charge;
    }

    /**
     * @param mixed $en_charge
     */
    public function setEnCharge($en_charge)
    {
        $this->en_charge = $en_charge;
    }

    /**
     * @return mixed
     */
    public function getUniteOuvertePreinscription()
    {
        return $this->unite_ouverte_preinscription;
    }

    /**
     * @param mixed $unite_ouverte_preinscription
     */
    public function setUniteOuvertePreinscription($unite_ouverte_preinscription)
    {
        $this->unite_ouverte_preinscription = $unite_ouverte_preinscription;
    }

    /**
     * @return mixed
     */
    public function getUniteOuverteExportPleiad()
    {
        return $this->unite_ouverte_export_pleiad;
    }

    /**
     * @param mixed $unite_ouverte_export_pleiad
     */
    public function setUniteOuverteExportPleiad($unite_ouverte_export_pleiad)
    {
        $this->unite_ouverte_export_pleiad = $unite_ouverte_export_pleiad;
    }

    /**
     * @return mixed
     */
    public function getFinanceurNom()
    {
        return $this->financeur_nom;
    }

    /**
     * @param mixed $financeur_nom
     */
    public function setFinanceurNom($financeur_nom)
    {
        $this->financeur_nom = $financeur_nom;
    }

    /**
     * @return mixed
     */
    public function getIdentifiantPleiad()
    {
        return $this->identifiant_pleiad;
    }

    /**
     * @param mixed $identifiant_pleiad
     */
    public function setIdentifiantPleiad($identifiant_pleiad)
    {
        $this->identifiant_pleiad = $identifiant_pleiad;
    }

    /**
     * @return mixed
     */
    public function getRegroupementProgrammeCode()
    {
        return $this->regroupement_programme_code;
    }

    /**
     * @param mixed $regroupement_programme_code
     */
    public function setRegroupementProgrammeCode($regroupement_programme_code)
    {
        $this->regroupement_programme_code = $regroupement_programme_code;
    }

    /**
     * @return mixed
     */
    public function getRegroupementProgrammeLibelle()
    {
        return $this->regroupement_programme_libelle;
    }

    /**
     * @param mixed $regroupement_programme_libelle
     */
    public function setRegroupementProgrammeLibelle($regroupement_programme_libelle)
    {
        $this->regroupement_programme_libelle = $regroupement_programme_libelle;
    }

    /**
     * @return mixed
     */
    public function getCraOrganisateur()
    {
        return $this->cra_organisateur;
    }

    /**
     * @param mixed $cra_organisateur
     */
    public function setCraOrganisateur($cra_organisateur)
    {
        $this->cra_organisateur = $cra_organisateur;
    }

}
