<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class Facture extends EntityAbstract
{
    protected $facture_numero;
    protected $facture_code_interne;
    protected $facture_date;
    protected $facture_date_echeance;
    protected $annee;
    protected $annee_universitaire;
    protected $type_facture;
    protected $type_client;
    protected $entreprise_numero;
    protected $entreprise_nom;
    protected $facture_gestionnaire;
    protected $facture_info1;
    protected $facture_info2;
    protected $facture_date_impression;
    protected $facture_utilisateur_impression;
    protected $facture_annule;
    protected $facture_montant_ht;
    protected $facture_montant_TVA;
    protected $facture_code;
    protected $facture_montant_total;
    protected $compte_collectif;
    protected $auditeur_numero;
    protected $auditeur_code;
    protected $auditeur_nom;
    protected $auditeur_prenom;
    protected $auditeur_nom_usage;
    protected $compte_auxiliaire;

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

    /**
     * @return mixed
     */
    public function getCompteAuxiliaire()
    {
        return $this->compte_auxiliaire;
    }

    /**
     * @param mixed $compte_auxiliaire
     */
    public function setCompteAuxiliaire($compte_auxiliaire)
    {
        $this->compte_auxiliaire = $compte_auxiliaire;
    }
    
    /**
     * @return mixed
     */
    public function getFactureCode()
    {
        return $this->facture_code;
    }

    /**
     * @param mixed $facture_code
     */
    public function setFactureCode($facture_code)
    {
        $this->facture_code = $facture_code;
    }

    /**
     * @return mixed
     */
    public function getFactureMontantTotal()
    {
        return $this->facture_montant_total;
    }

    /**
     * @param mixed $facture_montant_total
     */
    public function setFactureMontantTotal($facture_montant_total)
    {
        $this->facture_montant_total = $facture_montant_total;
    }

    /**
     * @return mixed
     */
    public function getCompteCollectif()
    {
        return $this->compte_collectif;
    }

    /**
     * @param mixed $compte_collectif
     */
    public function setCompteCollectif($compte_collectif)
    {
        $this->compte_collectif = $compte_collectif;
    }

    /**
     * @return mixed
     */
    public function getFactureNumero()
    {
        return $this->facture_numero;
    }

    /**
     * @param mixed $facture_numero
     */
    public function setFactureNumero($facture_numero)
    {
        $this->facture_numero = $facture_numero;
    }

    /**
     * @return mixed
     */
    public function getFactureCodeInterne()
    {
        return $this->facture_code_interne;
    }

    /**
     * @param mixed $facture_code_interne
     */
    public function setFactureCodeInterne($facture_code_interne)
    {
        $this->facture_code_interne = $facture_code_interne;
    }

    /**
     * @return mixed
     */
    public function getFactureDate()
    {
        return $this->facture_date;
    }

    /**
     * @param mixed $facture_date
     */
    public function setFactureDate($facture_date)
    {
        $this->facture_date = $facture_date;
    }

    /**
     * @return mixed
     */
    public function getFactureDateEcheance()
    {
        return $this->facture_date_echeance;
    }

    /**
     * @param mixed $facture_date_echeance
     */
    public function setFactureDateEcheance($facture_date_echeance)
    {
        $this->facture_date_echeance = $facture_date_echeance;
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
    public function getTypeFacture()
    {
        return $this->type_facture;
    }

    /**
     * @param mixed $type_facture
     */
    public function setTypeFacture($type_facture)
    {
        $this->type_facture = $type_facture;
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
    public function getFactureGestionnaire()
    {
        return $this->facture_gestionnaire;
    }

    /**
     * @param mixed $facture_gestionnaire
     */
    public function setFactureGestionnaire($facture_gestionnaire)
    {
        $this->facture_gestionnaire = $facture_gestionnaire;
    }

    /**
     * @return mixed
     */
    public function getFactureInfo1()
    {
        return $this->facture_info1;
    }

    /**
     * @param mixed $facture_info1
     */
    public function setFactureInfo1($facture_info1)
    {
        $this->facture_info1 = $facture_info1;
    }

    /**
     * @return mixed
     */
    public function getFactureInfo2()
    {
        return $this->facture_info2;
    }

    /**
     * @param mixed $facture_info2
     */
    public function setFactureInfo2($facture_info2)
    {
        $this->facture_info2 = $facture_info2;
    }

    /**
     * @return mixed
     */
    public function getFactureDateImpression()
    {
        return $this->facture_date_impression;
    }

    /**
     * @param mixed $facture_date_impression
     */
    public function setFactureDateImpression($facture_date_impression)
    {
        $this->facture_date_impression = $facture_date_impression;
    }

    /**
     * @return mixed
     */
    public function getFactureUtilisateurImpression()
    {
        return $this->facture_utilisateur_impression;
    }

    /**
     * @param mixed $facture_utilisateur_impression
     */
    public function setFactureUtilisateurImpression($facture_utilisateur_impression)
    {
        $this->facture_utilisateur_impression = $facture_utilisateur_impression;
    }

    /**
     * @return mixed
     */
    public function getFactureAnnule()
    {
        return $this->facture_annule;
    }

    /**
     * @param mixed $facture_annule
     */
    public function setFactureAnnule($facture_annule)
    {
        $this->facture_annule = $facture_annule;
    }

    /**
     * @return mixed
     */
    public function getFactureMontantHt()
    {
        return $this->facture_montant_ht;
    }

    /**
     * @param mixed $facture_montant_ht
     */
    public function setFactureMontantHt($facture_montant_ht)
    {
        $this->facture_montant_ht = $facture_montant_ht;
    }

    /**
     * @return mixed
     */
    public function getFactureMontantTVA()
    {
        return $this->facture_montant_TVA;
    }

    /**
     * @param mixed $facture_montant_TVA
     */
    public function setFactureMontantTVA($facture_montant_TVA)
    {
        $this->facture_montant_TVA = $facture_montant_TVA;
    }

}
