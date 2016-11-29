<?php

namespace Zac2\Domain;


use Zac2\Common\DateTime;
use Zac2\Entity\EntityAbstract;

class InscriptionUnite extends EntityAbstract
{

    /** @var  string */
    protected $annee_universitaire;
    /** @var  int */
    protected $annee;
    /** @var  string */
    protected $centre_code;
    /** @var  string */
    protected $centre_libelle;
    /** @var  string */
    protected $centre_attachement_libelle;
    /** @var  int */
    protected $auditeur_numero;
    /** @var  string */
    protected $auditeur_code;
    /** @var  string */
    protected $auditeur_nom;
    /** @var  string */
    protected $auditeur_prenom;
    /** @var  string */
    protected $auditeur_nom_usage;
    /** @var  string */
    protected $semestre_code;
    /** @var  string */
    protected $semestre_libelle;
    /** @var  int */
    protected $unite_numero;
    /** @var  string */
    protected $unite_code;
    /** @var  string */
    protected $unite_libelle1;
    /** @var  int */
    protected $unite_ects;
    /** @var  float */
    protected $unite_nb_heure;
    /** @var  string */
    protected $type_tarif_code;
    /** @var  string */
    protected $type_tarif_libelle;
    /** @var  float */
    protected $inscription_unite_montant;
    /** @var  string */
    protected $inscription_unite_cra;
    /** @var  string */
    protected $groupe_code;
    /** @var  string */
    protected $groupe_libelle;
    /** @var  int */
    protected $type_notation_numero;
    /** @var  string */
    protected $note_max;
    /** @var  string */
    protected $inscription_unite_inscrit_session2;
    /** @var  string */
    protected $inscription_unite_etat;
    /** @var  string */
    protected $inscription_unite_date_creation;
    /** @var  string */
    protected $inscription_unite_origine_preins;
    /** @var  string */
    protected $utilisateur_creation;
    /** @var  string */
    protected $date_creation;
    /** @var  float */
    protected $inscription_unite_note1;
    /** @var  float */
    protected $inscription_unite_note1reel;
    /** @var  string */
    protected $inscription_unite_type_obtention;
    /** @var  string */
    protected $modalite;
    /** @var  string */
    protected $date_modification;
    /** @var  string */
    protected $inscription_unite_date_modification;
    /** @var  string */
    protected $utilisateur_modification;
    /** @var  string */
    protected $sousgroupe_code;
    /** @var  string */
    protected $sousgroupe_libelle;
    /** @var  string */
    protected $inscription_unite_note2;
    /** @var  string */
    protected $inscription_unite_note2reel;
    /** @var  DateTime */
    protected $date_envoi_fiche_navette;
    /** @var  DateTime */
    protected $date_impression_fiche_navette;
    /** @var  string */
    protected $tarif_memo;
    /** @var  int */
    protected $regroupement_programme_code;
    /** @var  string */
    protected $regroupement_programme_libelle;
    /** @var  int */
    protected $formation_numero;
    /** @var  string */
    protected $formation_libelle;


    /**
     * @return mixed
     */
    public function getDateEnvoiFicheNavette()
    {
        return $this->date_envoi_fiche_navette;
    }

    /**
     * @param mixed $date_envoi_fiche_navette
     */
    public function setDateEnvoiFicheNavette($date_envoi_fiche_navette)
    {
        $this->date_envoi_fiche_navette = new DateTime($date_envoi_fiche_navette);
    }

    /**
     * @return mixed
     */
    public function getDateImpressionFicheNavette()
    {
        return $this->date_impression_fiche_navette;
    }

    /**
     * @param mixed $date_impression_fiche_navette
     */
    public function setDateImpressionFicheNavette($date_impression_fiche_navette)
    {
        $this->date_impression_fiche_navette = new DateTime($date_impression_fiche_navette);
    }

    /**
     * @return mixed
     */
    public function getTarifMemo()
    {
        return $this->tarif_memo;
    }

    /**
     * @param mixed $tarif_memo
     */
    public function setTarifMemo($tarif_memo)
    {
        $this->tarif_memo = $tarif_memo;
    }

    /**
     * @return string
     */
    public function getSousgroupeCode()
    {
        return $this->sousgroupe_code;
    }

    /**
     * @param string $sousgroupe_code
     */
    public function setSousgroupeCode($sousgroupe_code)
    {
        $this->sousgroupe_code = $sousgroupe_code;
    }

    /**
     * @return string
     */
    public function getSousgroupeLibelle()
    {
        return $this->sousgroupe_libelle;
    }

    /**
     * @param string $sousgroupe_libelle
     */
    public function setSousgroupeLibelle($sousgroupe_libelle)
    {
        $this->sousgroupe_libelle = $sousgroupe_libelle;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteNote2()
    {
        return $this->inscription_unite_note2;
    }

    /**
     * @param string $inscription_unite_note2
     */
    public function setInscriptionUniteNote2($inscription_unite_note2)
    {
        $this->inscription_unite_note2 = $inscription_unite_note2;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteNote2reel()
    {
        return $this->inscription_unite_note2reel;
    }

    /**
     * @param string $inscription_unite_note2reel
     */
    public function setInscriptionUniteNote2reel($inscription_unite_note2reel)
    {
        $this->inscription_unite_note2reel = $inscription_unite_note2reel;
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
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param int $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return string
     */
    public function getCentreCode()
    {
        return $this->centre_code;
    }

    /**
     * @param string $centre_code
     */
    public function setCentreCode($centre_code)
    {
        $this->centre_code = $centre_code;
    }

    /**
     * @return string
     */
    public function getCentreLibelle()
    {
        return $this->centre_libelle;
    }

    /**
     * @param string $centre_libelle
     */
    public function setCentreLibelle($centre_libelle)
    {
        $this->centre_libelle = $centre_libelle;
    }

    /**
     * @return string
     */
    public function getCentreAttachementLibelle()
    {
        return $this->centre_attachement_libelle;
    }

    /**
     * @param string $centre_attachement_libelle
     */
    public function setCentreAttachementLibelle($centre_attachement_libelle)
    {
        $this->centre_attachement_libelle = $centre_attachement_libelle;
    }

    /**
     * @return int
     */
    public function getAuditeurNumero()
    {
        return $this->auditeur_numero;
    }

    /**
     * @param int $auditeur_numero
     */
    public function setAuditeurNumero($auditeur_numero)
    {
        $this->auditeur_numero = $auditeur_numero;
    }

    /**
     * @return string
     */
    public function getAuditeurCode()
    {
        return $this->auditeur_code;
    }

    /**
     * @param string $auditeur_code
     */
    public function setAuditeurCode($auditeur_code)
    {
        $this->auditeur_code = $auditeur_code;
    }

    /**
     * @return string
     */
    public function getAuditeurNom()
    {
        return $this->auditeur_nom;
    }

    /**
     * @param string $auditeur_nom
     */
    public function setAuditeurNom($auditeur_nom)
    {
        $this->auditeur_nom = $auditeur_nom;
    }

    /**
     * @return string
     */
    public function getAuditeurPrenom()
    {
        return $this->auditeur_prenom;
    }

    /**
     * @param string $auditeur_prenom
     */
    public function setAuditeurPrenom($auditeur_prenom)
    {
        $this->auditeur_prenom = $auditeur_prenom;
    }

    /**
     * @return string
     */
    public function getAuditeurNomUsage()
    {
        return $this->auditeur_nom_usage;
    }

    /**
     * @param string $auditeur_nom_usage
     */
    public function setAuditeurNomUsage($auditeur_nom_usage)
    {
        $this->auditeur_nom_usage = $auditeur_nom_usage;
    }

    /**
     * @return string
     */
    public function getSemestreCode()
    {
        return $this->semestre_code;
    }

    /**
     * @param string $semestre_code
     */
    public function setSemestreCode($semestre_code)
    {
        $this->semestre_code = $semestre_code;
    }

    /**
     * @return string
     */
    public function getSemestreLibelle()
    {
        return $this->semestre_libelle;
    }

    /**
     * @param string $semestre_libelle
     */
    public function setSemestreLibelle($semestre_libelle)
    {
        $this->semestre_libelle = $semestre_libelle;
    }

    /**
     * @return int
     */
    public function getUniteNumero()
    {
        return $this->unite_numero;
    }

    /**
     * @param int $unite_numero
     */
    public function setUniteNumero($unite_numero)
    {
        $this->unite_numero = $unite_numero;
    }

    /**
     * @return string
     */
    public function getUniteCode()
    {
        return $this->unite_code;
    }

    /**
     * @param string $unite_code
     */
    public function setUniteCode($unite_code)
    {
        $this->unite_code = $unite_code;
    }

    /**
     * @return string
     */
    public function getUniteLibelle1()
    {
        return $this->unite_libelle1;
    }

    /**
     * @param string $unite_libelle1
     */
    public function setUniteLibelle1($unite_libelle1)
    {
        $this->unite_libelle1 = $unite_libelle1;
    }

    /**
     * @return int
     */
    public function getUniteEcts()
    {
        return $this->unite_ects;
    }

    /**
     * @param int $unite_ects
     */
    public function setUniteEcts($unite_ects)
    {
        $this->unite_ects = $unite_ects;
    }

    /**
     * @return float
     */
    public function getUniteNbHeure()
    {
        return $this->unite_nb_heure;
    }

    /**
     * @param float $unite_nb_heure
     */
    public function setUniteNbHeure($unite_nb_heure)
    {
        $this->unite_nb_heure = $unite_nb_heure;
    }

    /**
     * @return string
     */
    public function getTypeTarifCode()
    {
        return $this->type_tarif_code;
    }

    /**
     * @param string $type_tarif_code
     */
    public function setTypeTarifCode($type_tarif_code)
    {
        $this->type_tarif_code = $type_tarif_code;
    }

    /**
     * @return string
     */
    public function getTypeTarifLibelle()
    {
        return $this->type_tarif_libelle;
    }

    /**
     * @param string $type_tarif_libelle
     */
    public function setTypeTarifLibelle($type_tarif_libelle)
    {
        $this->type_tarif_libelle = $type_tarif_libelle;
    }

    /**
     * @return float
     */
    public function getInscriptionUniteMontant()
    {
        return $this->inscription_unite_montant;
    }

    /**
     * @param float $inscription_unite_montant
     */
    public function setInscriptionUniteMontant($inscription_unite_montant)
    {
        $this->inscription_unite_montant = $inscription_unite_montant;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteCra()
    {
        return $this->inscription_unite_cra;
    }

    /**
     * @param string $inscription_unite_cra
     */
    public function setInscriptionUniteCra($inscription_unite_cra)
    {
        $this->inscription_unite_cra = $inscription_unite_cra;
    }

    /**
     * @return string
     */
    public function getGroupeCode()
    {
        return $this->groupe_code;
    }

    /**
     * @param string $groupe_code
     */
    public function setGroupeCode($groupe_code)
    {
        $this->groupe_code = $groupe_code;
    }

    /**
     * @return string
     */
    public function getGroupeLibelle()
    {
        return $this->groupe_libelle;
    }

    /**
     * @param string $groupe_libelle
     */
    public function setGroupeLibelle($groupe_libelle)
    {
        $this->groupe_libelle = $groupe_libelle;
    }

    /**
     * @return int
     */
    public function getTypeNotationNumero()
    {
        return $this->type_notation_numero;
    }

    /**
     * @param int $type_notation_numero
     */
    public function setTypeNotationNumero($type_notation_numero)
    {
        $this->type_notation_numero = $type_notation_numero;
    }

    /**
     * @return string
     */
    public function getNoteMax()
    {
        return $this->note_max;
    }

    /**
     * @param string $note_max
     */
    public function setNoteMax($note_max)
    {
        $this->note_max = $note_max;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteInscritSession2()
    {
        return $this->inscription_unite_inscrit_session2;
    }

    /**
     * @param string $inscription_unite_inscrit_session2
     */
    public function setInscriptionUniteInscritSession2($inscription_unite_inscrit_session2)
    {
        $this->inscription_unite_inscrit_session2 = $inscription_unite_inscrit_session2;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteEtat()
    {
        return $this->inscription_unite_etat;
    }

    /**
     * @param string $inscription_unite_etat
     */
    public function setInscriptionUniteEtat($inscription_unite_etat)
    {
        $this->inscription_unite_etat = $inscription_unite_etat;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteDateCreation()
    {
        return $this->inscription_unite_date_creation;
    }

    /**
     * @param string $inscription_unite_date_creation
     */
    public function setInscriptionUniteDateCreation($inscription_unite_date_creation)
    {
        $this->inscription_unite_date_creation = $inscription_unite_date_creation;
    }

    /**
     * @return mixed
     */
    public function getInscriptionUniteOriginePreins()
    {
        return $this->inscription_unite_origine_preins;
    }

    /**
     * @param mixed $inscription_unite_origine_preins
     */
    public function setInscriptionUniteOriginePreins($inscription_unite_origine_preins)
    {
        $this->inscription_unite_origine_preins = $inscription_unite_origine_preins;
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
     * @return string
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param string $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return float
     */
    public function getInscriptionUniteNote1()
    {
        return $this->inscription_unite_note1;
    }

    /**
     * @param float $inscription_unite_note1
     */
    public function setInscriptionUniteNote1($inscription_unite_note1)
    {
        $this->inscription_unite_note1 = $inscription_unite_note1;
    }

    /**
     * @return float
     */
    public function getInscriptionUniteNote1reel()
    {
        return $this->inscription_unite_note1reel;
    }

    /**
     * @param float $inscription_unite_note1reel
     */
    public function setInscriptionUniteNote1reel($inscription_unite_note1reel)
    {
        $this->inscription_unite_note1reel = $inscription_unite_note1reel;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteTypeObtention()
    {
        return $this->inscription_unite_type_obtention;
    }

    /**
     * @param string $inscription_unite_type_obtention
     */
    public function setInscriptionUniteTypeObtention($inscription_unite_type_obtention)
    {
        $this->inscription_unite_type_obtention = $inscription_unite_type_obtention;
    }

    /**
     * @return string
     */
    public function getModalite()
    {
        return $this->modalite;
    }

    /**
     * @param string $modalite
     */
    public function setModalite($modalite)
    {
        $this->modalite = $modalite;
    }

    /**
     * @return string
     */
    public function getInscriptionUniteDateModification()
    {
        return $this->inscription_unite_date_modification;
    }

    /**
     * @param string $inscription_unite_date_modification
     */
    public function setInscriptionUniteDateModification($inscription_unite_date_modification)
    {
        $this->inscription_unite_date_modification = $inscription_unite_date_modification;
    }

    /**
     * @return string
     */
    public function getUtilisateurModification()
    {
        return $this->utilisateur_modification;
    }

    /**
     * @param string $utilisateur_modification
     */
    public function setUtilisateurModification($utilisateur_modification)
    {
        $this->utilisateur_modification = $utilisateur_modification;
    }

    /**
     * @return string
     */
    public function getDateModification()
    {
        return $this->date_modification;
    }

    /**
     * @param string $date_modification
     */
    public function setDateModification($date_modification)
    {
        $this->date_modification = $date_modification;
    }

    /**
     * @return int
     */
    public function getRegroupementProgrammeCode()
    {
        return $this->regroupement_programme_code;
    }

    /**
     * @param int $regroupement_programme_code
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
     * @return int
     */
    public function getFormationNumero()
    {
        return $this->formation_numero;
    }

    /**
     * @param int $formation_numero
     */
    public function setFormationNumero($formation_numero)
    {
        $this->formation_numero = $formation_numero;
    }

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

}