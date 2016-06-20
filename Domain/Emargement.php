<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class Emargement extends EntityAbstract
{

    /**
     * @var int
     */
    protected $evenement_code;
    /**
     * @var int
     */
    protected $annee;
    /**
     * @var string
     */
    protected $annee_universitaire;
    /**
     * @var int
     */
    protected $centre_code;
    /**
     * @var string
     */
    protected $centre_libelle;
    /**
     * @var int
     */
    protected $enseignant_code;
    /**
     * @var \DateTime
     */
    protected $emargement_date;
    /**
     * @var int
     */
    protected $emargement_type_evenement_code;
    /**
     * @var int
     */
    protected $centre_attachement_code;
    /**
     * @var string
     */
    protected $centre_attachement_libelle;
    /**
     * @var int
     */
    protected $unite_numero;
    /**
     * @var string
     */
    protected $unite_code;
    /**
     * @var string
     */
    protected $unite_libelle1;
    /**
     * @var int
     */
    protected $unite_ects;
    /**
     * @var int
     */
    protected $groupe_code;
    /**
     * @var string
     */
    protected $groupe_libelle;
    /**
     * @var int
     */
    protected $semestre_code;
    /**
     * @var string
     */
    protected $semestre_libelle;
    /**
     * @var int
     */
    protected $modalite_numero;
    /**
     * @var string
     */
    protected $modalite_code;
    /**
     * @var string
     */
    protected $modalite_libelle;
    /**
     * @var string
     */
    protected $enseignant_nom;
    /**
     * @var string
     */
    protected $enseignant_prenom;
    /**
     * @var string
     */
    protected $enseignant_nom_usage;
    /**
     * @var int
     */
    protected $emargement_salle_code;
    /**
     * @var string
     */
    protected $emargement_salle;
    /**
     * @var string
     */
    protected $emargement_lieu;
    /**
     * @var string
     */
    protected $emargement_type_evenement;
    /**
     * @var \DateTime
     */
    protected $emargement_heure_debut;
    /**
     * @var \DateTime
     */
    protected $emargement_heure_fin;
    /**
     * @var float
     */
    protected $emargement_duree;
    /**
     * @var float
     */
    protected $emargement_heures_presence;
    /**
     * @var float
     */
    protected $emargement_heures_travail_personnel;
    /**
     * @var float
     */
    protected $emargement_heures_a_payer_total;
    /**
     * @var float
     */
    protected $emargement_heures_a_payer_tarif_cours;
    /**
     * @var float
     */
    protected $emargement_heures_a_payer_tarif_td;
    /**
     * @var float
     */
    protected $emargement_heures_a_payer_tarif_tp;
    /**
     * @var float
     */
    protected $emargement_heures_a_payer_tarif_ds;
    /**
     * @var float
     */
    protected $emargement_heures_a_payer_tarif_autre;
    /**
     * @var int
     */
    protected $emargement_bordereau;
    /**
     * @var \DateTime
     */
    protected $emargement_bordereau_date;
    /**
     * @var string
     */
    protected $emargement_bordereau_paye;
    /**
     * @var int
     */
    protected $auditeur_numero;
    /**
     * @var string
     */
    protected $auditeur_code;
    /**
     * @var string
     */
    protected $auditeur_nom;
    /**
     * @var string
     */
    protected $auditeur_prenom;
    /**
     * @var string
     */
    protected $auditeur_nom_usage;
    /**
     * @var string
     */
    protected $emargement_type_presence;
    /**
     * @var string
     */
    protected $emargement_present;
    /**
     * @var string
     */
    protected $emargement_type_excuse;
    /**
     * @var string
     */
    protected $emargement_type_absence;
    /**
     * @var string
     */
    protected $emargement_commentaire;
    /**
     * @var int
     */
    protected $enseignant_matricule;

    /**
     * @return mixed
     */
    public function getEnseignantCode()
    {
        return $this->enseignant_code;
    }

    /**
     * @param mixed $enseignant_code
     */
    public function setEnseignantCode($enseignant_code)
    {
        $this->enseignant_code = $enseignant_code;
    }

    /**
     * @return mixed
     */
    public function getEmargementDate()
    {
        return $this->emargement_date;
    }

    /**
     * @param mixed $emargement_date
     */
    public function setEmargementDate($emargement_date)
    {
        $this->emargement_date = $emargement_date;
    }

    /**
     * @return mixed
     */
    public function getEmargementTypeEvenementCode()
    {
        return $this->emargement_type_evenement_code;
    }

    /**
     * @param mixed $emargement_type_evenement_code
     */
    public function setEmargementTypeEvenementCode($emargement_type_evenement_code)
    {
        $this->emargement_type_evenement_code = $emargement_type_evenement_code;
    }

    /**
     * @return int
     */
    public function getEvenementCode()
    {
        return $this->evenement_code;
    }

    /**
     * @param int $evenement_code
     */
    public function setEvenementCode($evenement_code)
    {
        $this->evenement_code = $evenement_code;
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
    public function getCentreCode()
    {
        return $this->centre_code;
    }

    /**
     * @param int $centre_code
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
     * @return int
     */
    public function getCentreAttachementCode()
    {
        return $this->centre_attachement_code;
    }

    /**
     * @param int $centre_attachement_code
     */
    public function setCentreAttachementCode($centre_attachement_code)
    {
        $this->centre_attachement_code = $centre_attachement_code;
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
     * @return int
     */
    public function getGroupeCode()
    {
        return $this->groupe_code;
    }

    /**
     * @param int $groupe_code
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
    public function getSemestreCode()
    {
        return $this->semestre_code;
    }

    /**
     * @param int $semestre_code
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
    public function getModaliteNumero()
    {
        return $this->modalite_numero;
    }

    /**
     * @param int $modalite_numero
     */
    public function setModaliteNumero($modalite_numero)
    {
        $this->modalite_numero = $modalite_numero;
    }

    /**
     * @return string
     */
    public function getModaliteCode()
    {
        return $this->modalite_code;
    }

    /**
     * @param string $modalite_code
     */
    public function setModaliteCode($modalite_code)
    {
        $this->modalite_code = $modalite_code;
    }

    /**
     * @return string
     */
    public function getModaliteLibelle()
    {
        return $this->modalite_libelle;
    }

    /**
     * @param string $modalite_libelle
     */
    public function setModaliteLibelle($modalite_libelle)
    {
        $this->modalite_libelle = $modalite_libelle;
    }

    /**
     * @return string
     */
    public function getEnseignantNom()
    {
        return $this->enseignant_nom;
    }

    /**
     * @param string $enseignant_nom
     */
    public function setEnseignantNom($enseignant_nom)
    {
        $this->enseignant_nom = $enseignant_nom;
    }

    /**
     * @return string
     */
    public function getEnseignantPrenom()
    {
        return $this->enseignant_prenom;
    }

    /**
     * @param string $enseignant_prenom
     */
    public function setEnseignantPrenom($enseignant_prenom)
    {
        $this->enseignant_prenom = $enseignant_prenom;
    }

    /**
     * @return string
     */
    public function getEnseignantNomUsage()
    {
        return $this->enseignant_nom_usage;
    }

    /**
     * @param string $enseignant_nom_usage
     */
    public function setEnseignantNomUsage($enseignant_nom_usage)
    {
        $this->enseignant_nom_usage = $enseignant_nom_usage;
    }

    /**
     * @return int
     */
    public function getEmargementSalleCode()
    {
        return $this->emargement_salle_code;
    }

    /**
     * @param int $emargement_salle_code
     */
    public function setEmargementSalleCode($emargement_salle_code)
    {
        $this->emargement_salle_code = $emargement_salle_code;
    }

    /**
     * @return string
     */
    public function getEmargementSalle()
    {
        return $this->emargement_salle;
    }

    /**
     * @param string $emargement_salle
     */
    public function setEmargementSalle($emargement_salle)
    {
        $this->emargement_salle = $emargement_salle;
    }

    /**
     * @return string
     */
    public function getEmargementLieu()
    {
        return $this->emargement_lieu;
    }

    /**
     * @param string $emargement_lieu
     */
    public function setEmargementLieu($emargement_lieu)
    {
        $this->emargement_lieu = $emargement_lieu;
    }

    /**
     * @return string
     */
    public function getEmargementTypeEvenement()
    {
        return $this->emargement_type_evenement;
    }

    /**
     * @param string $emargement_type_evenement
     */
    public function setEmargementTypeEvenement($emargement_type_evenement)
    {
        $this->emargement_type_evenement = $emargement_type_evenement;
    }

    /**
     * @return \DateTime
     */
    public function getEmargementHeureDebut()
    {
        return $this->emargement_heure_debut;
    }

    /**
     * @param \DateTime $emargement_heure_debut
     */
    public function setEmargementHeureDebut($emargement_heure_debut)
    {
        $this->emargement_heure_debut = $emargement_heure_debut;
    }

    /**
     * @return \DateTime
     */
    public function getEmargementHeureFin()
    {
        return $this->emargement_heure_fin;
    }

    /**
     * @param \DateTime $emargement_heure_fin
     */
    public function setEmargementHeureFin($emargement_heure_fin)
    {
        $this->emargement_heure_fin = $emargement_heure_fin;
    }

    /**
     * @return float
     */
    public function getEmargementDuree()
    {
        return $this->emargement_duree;
    }

    /**
     * @param float $emargement_duree
     */
    public function setEmargementDuree($emargement_duree)
    {
        $this->emargement_duree = $emargement_duree;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresPresence()
    {
        return $this->emargement_heures_presence;
    }

    /**
     * @param float $emargement_heures_presence
     */
    public function setEmargementHeuresPresence($emargement_heures_presence)
    {
        $this->emargement_heures_presence = $emargement_heures_presence;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresTravailPersonnel()
    {
        return $this->emargement_heures_travail_personnel;
    }

    /**
     * @param float $emargement_heures_travail_personnel
     */
    public function setEmargementHeuresTravailPersonnel($emargement_heures_travail_personnel)
    {
        $this->emargement_heures_travail_personnel = $emargement_heures_travail_personnel;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresAPayerTotal()
    {
        return $this->emargement_heures_a_payer_total;
    }

    /**
     * @param float $emargement_heures_a_payer_total
     */
    public function setEmargementHeuresAPayerTotal($emargement_heures_a_payer_total)
    {
        $this->emargement_heures_a_payer_total = $emargement_heures_a_payer_total;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresAPayerTarifCours()
    {
        return $this->emargement_heures_a_payer_tarif_cours;
    }

    /**
     * @param float $emargement_heures_a_payer_tarif_cours
     */
    public function setEmargementHeuresAPayerTarifCours($emargement_heures_a_payer_tarif_cours)
    {
        $this->emargement_heures_a_payer_tarif_cours = $emargement_heures_a_payer_tarif_cours;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresAPayerTarifTd()
    {
        return $this->emargement_heures_a_payer_tarif_td;
    }

    /**
     * @param float $emargement_heures_a_payer_tarif_td
     */
    public function setEmargementHeuresAPayerTarifTd($emargement_heures_a_payer_tarif_td)
    {
        $this->emargement_heures_a_payer_tarif_td = $emargement_heures_a_payer_tarif_td;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresAPayerTarifTp()
    {
        return $this->emargement_heures_a_payer_tarif_tp;
    }

    /**
     * @param float $emargement_heures_a_payer_tarif_tp
     */
    public function setEmargementHeuresAPayerTarifTp($emargement_heures_a_payer_tarif_tp)
    {
        $this->emargement_heures_a_payer_tarif_tp = $emargement_heures_a_payer_tarif_tp;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresAPayerTarifDs()
    {
        return $this->emargement_heures_a_payer_tarif_ds;
    }

    /**
     * @param float $emargement_heures_a_payer_tarif_ds
     */
    public function setEmargementHeuresAPayerTarifDs($emargement_heures_a_payer_tarif_ds)
    {
        $this->emargement_heures_a_payer_tarif_ds = $emargement_heures_a_payer_tarif_ds;
    }

    /**
     * @return float
     */
    public function getEmargementHeuresAPayerTarifAutre()
    {
        return $this->emargement_heures_a_payer_tarif_autre;
    }

    /**
     * @param float $emargement_heures_a_payer_tarif_autre
     */
    public function setEmargementHeuresAPayerTarifAutre($emargement_heures_a_payer_tarif_autre)
    {
        $this->emargement_heures_a_payer_tarif_autre = $emargement_heures_a_payer_tarif_autre;
    }

    /**
     * @return int
     */
    public function getEmargementBordereau()
    {
        return $this->emargement_bordereau;
    }

    /**
     * @param int $emargement_bordereau
     */
    public function setEmargementBordereau($emargement_bordereau)
    {
        $this->emargement_bordereau = $emargement_bordereau;
    }

    /**
     * @return \DateTime
     */
    public function getEmargementBordereauDate()
    {
        return $this->emargement_bordereau_date;
    }

    /**
     * @param \DateTime $emargement_bordereau_date
     */
    public function setEmargementBordereauDate($emargement_bordereau_date)
    {
        $this->emargement_bordereau_date = $emargement_bordereau_date;
    }

    /**
     * @return string
     */
    public function getEmargementBordereauPaye()
    {
        return $this->emargement_bordereau_paye;
    }

    /**
     * @param string $emargement_bordereau_paye
     */
    public function setEmargementBordereauPaye($emargement_bordereau_paye)
    {
        $this->emargement_bordereau_paye = $emargement_bordereau_paye;
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
    public function getEmargementTypePresence()
    {
        return $this->emargement_type_presence;
    }

    /**
     * @param string $emargement_type_presence
     */
    public function setEmargementTypePresence($emargement_type_presence)
    {
        $this->emargement_type_presence = $emargement_type_presence;
    }

    /**
     * @return string
     */
    public function getEmargementPresent()
    {
        return $this->emargement_present;
    }

    /**
     * @param string $emargement_present
     */
    public function setEmargementPresent($emargement_present)
    {
        $this->emargement_present = $emargement_present;
    }

    /**
     * @return string
     */
    public function getEmargementTypeExcuse()
    {
        return $this->emargement_type_excuse;
    }

    /**
     * @param string $emargement_type_excuse
     */
    public function setEmargementTypeExcuse($emargement_type_excuse)
    {
        $this->emargement_type_excuse = $emargement_type_excuse;
    }

    /**
     * @return string
     */
    public function getEmargementTypeAbsence()
    {
        return $this->emargement_type_absence;
    }

    /**
     * @param string $emargement_type_absence
     */
    public function setEmargementTypeAbsence($emargement_type_absence)
    {
        $this->emargement_type_absence = $emargement_type_absence;
    }

    /**
     * @return string
     */
    public function getEmargementCommentaire()
    {
        return $this->emargement_commentaire;
    }

    /**
     * @param string $emargement_commentaire
     */
    public function setEmargementCommentaire($emargement_commentaire)
    {
        $this->emargement_commentaire = $emargement_commentaire;
    }

    /**
     * @return int
     */
    public function getEnseignantMatricule()
    {
        return $this->enseignant_matricule;
    }

    /**
     * @param int $enseignant_matricule
     */
    public function setEnseignantMatricule($enseignant_matricule)
    {
        $this->enseignant_matricule = $enseignant_matricule;
    }

}
