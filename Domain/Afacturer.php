<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class Afacturer extends EntityAbstract
{
    protected $a_facturer_numero;
    protected $a_facturer_type_operation;
    protected $a_facturer_date_operation;
    protected $annee;
    protected $annee_universitaire;
    protected $type_article;
    protected $centre_code;
    protected $centre_libelle;
    protected $unite_numero;
    protected $unite_code;
    protected $unite_libelle;
    protected $semestre_code;
    protected $modalite_numero;
    protected $modalite_libelle;
    protected $auditeur_numero;
    protected $auditeur_code;
    protected $auditeur_nom;
    protected $auditeur_prenom;
    protected $type_client;
    protected $a_facturer_prix_unitaire;
    protected $a_facturer_quantite;
    protected $prise_en_charge_numero;
    protected $date_echeance;
    protected $facture_detail_numero;
    protected $a_facturer_date_export;
    protected $entreprise_numero;
    protected $entreprise_nom;
    protected $auditeur_nom_usage;

    /**
     * @return mixed
     */
    public function getAFacturerNumero()
    {
        return $this->a_facturer_numero;
    }

    /**
     * @param mixed $a_facturer_numero
     */
    public function setAFacturerNumero($a_facturer_numero)
    {
        $this->a_facturer_numero = $a_facturer_numero;
    }

    /**
     * @return mixed
     */
    public function getAFacturerTypeOperation()
    {
        return $this->a_facturer_type_operation;
    }

    /**
     * @param mixed $a_facturer_type_operation
     */
    public function setAFacturerTypeOperation($a_facturer_type_operation)
    {
        $this->a_facturer_type_operation = $a_facturer_type_operation;
    }

    /**
     * @return mixed
     */
    public function getAFacturerDateOperation()
    {
        return $this->a_facturer_date_operation;
    }

    /**
     * @param mixed $a_facturer_date_operation
     */
    public function setAFacturerDateOperation($a_facturer_date_operation)
    {
        $this->a_facturer_date_operation = $a_facturer_date_operation;
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
    public function getTypeArticle()
    {
        return $this->type_article;
    }

    /**
     * @param mixed $type_article
     */
    public function setTypeArticle($type_article)
    {
        $this->type_article = $type_article;
    }

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
    public function getUniteLibelle()
    {
        return $this->unite_libelle;
    }

    /**
     * @param mixed $unite_libelle
     */
    public function setUniteLibelle($unite_libelle)
    {
        $this->unite_libelle = $unite_libelle;
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
    public function getModaliteNumero()
    {
        return $this->modalite_numero;
    }

    /**
     * @param mixed $modalite_numero
     */
    public function setModaliteNumero($modalite_numero)
    {
        $this->modalite_numero = $modalite_numero;
    }

    /**
     * @return mixed
     */
    public function getModaliteLibelle()
    {
        return $this->modalite_libelle;
    }

    /**
     * @param mixed $modalite_libelle
     */
    public function setModaliteLibelle($modalite_libelle)
    {
        $this->modalite_libelle = $modalite_libelle;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNumero()
    {
        return $this->auditeur_numero;
    }

    /**
     * @param mixed $auditeur_numero
     */
    public function setAuditeurNumero($auditeur_numero)
    {
        $this->auditeur_numero = $auditeur_numero;
    }

    /**
     * @return mixed
     */
    public function getAuditeurCode()
    {
        return $this->auditeur_code;
    }

    /**
     * @param mixed $auditeur_code
     */
    public function setAuditeurCode($auditeur_code)
    {
        $this->auditeur_code = $auditeur_code;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNom()
    {
        return $this->auditeur_nom;
    }

    /**
     * @param mixed $auditeur_nom
     */
    public function setAuditeurNom($auditeur_nom)
    {
        $this->auditeur_nom = $auditeur_nom;
    }

    /**
     * @return mixed
     */
    public function getAuditeurPrenom()
    {
        return $this->auditeur_prenom;
    }

    /**
     * @param mixed $auditeur_prenom
     */
    public function setAuditeurPrenom($auditeur_prenom)
    {
        $this->auditeur_prenom = $auditeur_prenom;
    }

    /**
     * @return mixed
     */
    public function getTypeClient()
    {
        return $this->type_client;
    }

    /**
     * @param mixed $type_client
     */
    public function setTypeClient($type_client)
    {
        $this->type_client = $type_client;
    }

    /**
     * @return mixed
     */
    public function getAFacturerPrixUnitaire()
    {
        return $this->a_facturer_prix_unitaire;
    }

    /**
     * @param mixed $a_facturer_prix_unitaire
     */
    public function setAFacturerPrixUnitaire($a_facturer_prix_unitaire)
    {
        $this->a_facturer_prix_unitaire = $a_facturer_prix_unitaire;
    }

    /**
     * @return mixed
     */
    public function getAFacturerQuantite()
    {
        return $this->a_facturer_quantite;
    }

    /**
     * @param mixed $a_facturer_quantite
     */
    public function setAFacturerQuantite($a_facturer_quantite)
    {
        $this->a_facturer_quantite = $a_facturer_quantite;
    }

    /**
     * @return mixed
     */
    public function getPriseEnChargeNumero()
    {
        return $this->prise_en_charge_numero;
    }

    /**
     * @param mixed $prise_en_charge_numero
     */
    public function setPriseEnChargeNumero($prise_en_charge_numero)
    {
        $this->prise_en_charge_numero = $prise_en_charge_numero;
    }

    /**
     * @return mixed
     */
    public function getDateEcheance()
    {
        return $this->date_echeance;
    }

    /**
     * @param mixed $date_echeance
     */
    public function setDateEcheance($date_echeance)
    {
        $this->date_echeance = $date_echeance;
    }

    /**
     * @return mixed
     */
    public function getFactureDetailNumero()
    {
        return $this->facture_detail_numero;
    }

    /**
     * @param mixed $facture_detail_numero
     */
    public function setFactureDetailNumero($facture_detail_numero)
    {
        $this->facture_detail_numero = $facture_detail_numero;
    }

    /**
     * @return mixed
     */
    public function getAFacturerDateExport()
    {
        return $this->a_facturer_date_export;
    }

    /**
     * @param mixed $a_facturer_date_export
     */
    public function setAFacturerDateExport($a_facturer_date_export)
    {
        $this->a_facturer_date_export = $a_facturer_date_export;
    }

    /**
     * @return mixed
     */
    public function getEntrepriseNumero()
    {
        return $this->entreprise_numero;
    }

    /**
     * @param mixed $entreprise_numero
     */
    public function setEntrepriseNumero($entreprise_numero)
    {
        $this->entreprise_numero = $entreprise_numero;
    }

    /**
     * @return mixed
     */
    public function getEntrepriseNom()
    {
        return $this->entreprise_nom;
    }

    /**
     * @param mixed $entreprise_nom
     */
    public function setEntrepriseNom($entreprise_nom)
    {
        $this->entreprise_nom = $entreprise_nom;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNomUsage()
    {
        return $this->auditeur_nom_usage;
    }

    /**
     * @param mixed $auditeur_nom_usage
     */
    public function setAuditeurNomUsage($auditeur_nom_usage)
    {
        $this->auditeur_nom_usage = $auditeur_nom_usage;
    }

}