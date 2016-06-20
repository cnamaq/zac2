<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class Inscription extends EntityAbstract
{
    protected $annee;
    protected $annee_universitaire;
    protected $centre_code;
    protected $centre_libelle;
    protected $centre_attachement_libelle;
    protected $auditeur_numero;
    protected $auditeur_code;
    protected $auditeur_nom;
    protected $auditeur_prenom;
    protected $inscription_etat;
    protected $inscription_cra;
    protected $inscription_diplome_prepare_numero;
    protected $inscription_diplome_prepare;
    protected $inscription_pole;
    protected $inscription_specialite;
    protected $inscription_situation_geographique;
    protected $type_tarif_code;
    protected $type_tarif_libelle;
    protected $inscription_montant;
    protected $inscription_date;
    protected $inscription_informer_employeur;
    protected $inscription_situation_professionnelle;
    protected $inscription_formation_initiale;
    protected $inscription_emploi_menace;
    protected $inscription_origine_preins;
    protected $utilisateur_creation;
    protected $date_creation;
    protected $auditeur_nom_usage;
    protected $inscription_statut_emploi;
    protected $utilisateur_modification;
    protected $date_modification;
    protected $inscription_promotion;
    protected $inscription_temps_travail;

    /**
     * @return mixed
     */
    public function getInscriptionTempsTravail()
    {
        return $this->inscription_temps_travail;
    }

    /**
     * @param mixed $inscription_temps_travail
     */
    public function setInscriptionTempsTravail($inscription_temps_travail)
    {
        $this->inscription_temps_travail = $inscription_temps_travail;
    }

    /**
     * @return mixed
     */
    public function getInscriptionPromotion()
    {
        return $this->inscription_promotion;
    }

    /**
     * @param mixed $inscription_promotion
     */
    public function setInscriptionPromotion($inscription_promotion)
    {
        $this->inscription_promotion = $inscription_promotion;
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
    public function getInscriptionStatutEmploi()
    {
        return $this->inscription_statut_emploi;
    }

    /**
     * @param mixed $inscription_statut_emploi
     */
    public function setInscriptionStatutEmploi($inscription_statut_emploi)
    {
        $this->inscription_statut_emploi = $inscription_statut_emploi;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurModification()
    {
        return $this->utilisateur_modification;
    }

    /**
     * @param mixed $utilisateur_modification
     */
    public function setUtilisateurModification($utilisateur_modification)
    {
        $this->utilisateur_modification = $utilisateur_modification;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->date_modification;
    }

    /**
     * @param mixed $date_modification
     */
    public function setDateModification($date_modification)
    {
        $this->date_modification = $date_modification;
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
    public function getCentreAttachementLibelle()
    {
        return $this->centre_attachement_libelle;
    }

    /**
     * @param mixed $centre_attachement_libelle
     */
    public function setCentreAttachementLibelle($centre_attachement_libelle)
    {
        $this->centre_attachement_libelle = $centre_attachement_libelle;
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
    public function getInscriptionEtat()
    {
        return $this->inscription_etat;
    }

    /**
     * @param mixed $inscription_etat
     */
    public function setInscriptionEtat($inscription_etat)
    {
        $this->inscription_etat = $inscription_etat;
    }

    /**
     * @return mixed
     */
    public function getInscriptionCra()
    {
        return $this->inscription_cra;
    }

    /**
     * @param mixed $inscription_cra
     */
    public function setInscriptionCra($inscription_cra)
    {
        $this->inscription_cra = $inscription_cra;
    }

    /**
     * @return mixed
     */
    public function getInscriptionDiplomePrepareNumero()
    {
        return $this->inscription_diplome_prepare_numero;
    }

    /**
     * @param mixed $inscription_diplome_prepare_numero
     */
    public function setInscriptionDiplomePrepareNumero($inscription_diplome_prepare_numero)
    {
        $this->inscription_diplome_prepare_numero = $inscription_diplome_prepare_numero;
    }

    /**
     * @return mixed
     */
    public function getInscriptionDiplomePrepare()
    {
        return $this->inscription_diplome_prepare;
    }

    /**
     * @param mixed $inscription_diplome_prepare
     */
    public function setInscriptionDiplomePrepare($inscription_diplome_prepare)
    {
        $this->inscription_diplome_prepare = $inscription_diplome_prepare;
    }

    /**
     * @return mixed
     */
    public function getInscriptionPole()
    {
        return $this->inscription_pole;
    }

    /**
     * @param mixed $inscription_pole
     */
    public function setInscriptionPole($inscription_pole)
    {
        $this->inscription_pole = $inscription_pole;
    }

    /**
     * @return mixed
     */
    public function getInscriptionSpecialite()
    {
        return $this->inscription_specialite;
    }

    /**
     * @param mixed $inscription_specialite
     */
    public function setInscriptionSpecialite($inscription_specialite)
    {
        $this->inscription_specialite = $inscription_specialite;
    }

    /**
     * @return mixed
     */
    public function getInscriptionSituationGeographique()
    {
        return $this->inscription_situation_geographique;
    }

    /**
     * @param mixed $inscription_situation_geographique
     */
    public function setInscriptionSituationGeographique($inscription_situation_geographique)
    {
        $this->inscription_situation_geographique = $inscription_situation_geographique;
    }

    /**
     * @return mixed
     */
    public function getTypeTarifCode()
    {
        return $this->type_tarif_code;
    }

    /**
     * @param mixed $type_tarif_code
     */
    public function setTypeTarifCode($type_tarif_code)
    {
        $this->type_tarif_code = $type_tarif_code;
    }

    /**
     * @return mixed
     */
    public function getTypeTarifLibelle()
    {
        return $this->type_tarif_libelle;
    }

    /**
     * @param mixed $type_tarif_libelle
     */
    public function setTypeTarifLibelle($type_tarif_libelle)
    {
        $this->type_tarif_libelle = $type_tarif_libelle;
    }

    /**
     * @return mixed
     */
    public function getInscriptionMontant()
    {
        return $this->inscription_montant;
    }

    /**
     * @param mixed $inscription_montant
     */
    public function setInscriptionMontant($inscription_montant)
    {
        $this->inscription_montant = $inscription_montant;
    }

    /**
     * @return mixed
     */
    public function getInscriptionDate()
    {
        return $this->inscription_date;
    }

    /**
     * @param mixed $inscription_date
     */
    public function setInscriptionDate($inscription_date)
    {
        $this->inscription_date = $inscription_date;
    }

    /**
     * @return mixed
     */
    public function getInscriptionInformerEmployeur()
    {
        return $this->inscription_informer_employeur;
    }

    /**
     * @param mixed $inscription_informer_employeur
     */
    public function setInscriptionInformerEmployeur($inscription_informer_employeur)
    {
        $this->inscription_informer_employeur = $inscription_informer_employeur;
    }

    /**
     * @return mixed
     */
    public function getInscriptionSituationProfessionnelle()
    {
        return $this->inscription_situation_professionnelle;
    }

    /**
     * @param mixed $inscription_situation_professionnelle
     */
    public function setInscriptionSituationProfessionnelle($inscription_situation_professionnelle)
    {
        $this->inscription_situation_professionnelle = $inscription_situation_professionnelle;
    }

    /**
     * @return mixed
     */
    public function getInscriptionFormationInitiale()
    {
        return $this->inscription_formation_initiale;
    }

    /**
     * @param mixed $inscription_formation_initiale
     */
    public function setInscriptionFormationInitiale($inscription_formation_initiale)
    {
        $this->inscription_formation_initiale = $inscription_formation_initiale;
    }

    /**
     * @return mixed
     */
    public function getInscriptionEmploiMenace()
    {
        return $this->inscription_emploi_menace;
    }

    /**
     * @param mixed $inscription_emploi_menace
     */
    public function setInscriptionEmploiMenace($inscription_emploi_menace)
    {
        $this->inscription_emploi_menace = $inscription_emploi_menace;
    }

    /**
     * @return mixed
     */
    public function getInscriptionOriginePreins()
    {
        return $this->inscription_origine_preins;
    }

    /**
     * @param mixed $inscription_origine_preins
     */
    public function setInscriptionOriginePreins($inscription_origine_preins)
    {
        $this->inscription_origine_preins = $inscription_origine_preins;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurCreation()
    {
        return $this->utilisateur_creation;
    }

    /**
     * @param mixed $utilisateur_creation
     */
    public function setUtilisateurCreation($utilisateur_creation)
    {
        $this->utilisateur_creation = $utilisateur_creation;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }


}