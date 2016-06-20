<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class Evenement extends EntityAbstract
{
    protected $evenement_code;
    protected $annee;
    protected $annee_universitaire;
    protected $centre_code;
    protected $centre_libelle;
    protected $unite_numero;
    protected $unite_code;
    protected $unite_libelle1;
    protected $unite_ects;
    protected $groupe_code;
    protected $groupe_libelle;
    protected $semestre_code;
    protected $semestre_libelle;
    protected $enseignant_code;
    protected $enseignant_nom;
    protected $enseignant_prenom;
    protected $evenement_type_evenement_code;
    protected $evenement_type_evenement;
    protected $evenement_date;
    protected $evenement_heure_debut;
    protected $evenement_heure_fin;
    protected $evenement_duree;
    protected $evenement_commentaire;
    protected $evenement_valide;
    protected $evenement_salle_code;
    protected $evenement_salle;
    protected $evenement_lieu;
    protected $enseignant_nom_usage;
    protected $sousgroupe_code;
    protected $sousgroupe_libelle;
    protected $matiere_code;
    protected $matiere_libelle;

    /**
     * @return mixed
     */
    public function getSousgroupeCode()
    {
        return $this->sousgroupe_code;
    }

    /**
     * @param mixed $sousgroupe_code
     */
    public function setSousgroupeCode($sousgroupe_code)
    {
        $this->sousgroupe_code = $sousgroupe_code;
    }

    /**
     * @return mixed
     */
    public function getSousgroupeLibelle()
    {
        return $this->sousgroupe_libelle;
    }

    /**
     * @param mixed $sousgroupe_libelle
     */
    public function setSousgroupeLibelle($sousgroupe_libelle)
    {
        $this->sousgroupe_libelle = $sousgroupe_libelle;
    }

    /**
     * @return mixed
     */
    public function getMatiereCode()
    {
        return $this->matiere_code;
    }

    /**
     * @param mixed $matiere_code
     */
    public function setMatiereCode($matiere_code)
    {
        $this->matiere_code = $matiere_code;
    }

    /**
     * @return mixed
     */
    public function getMatiereLibelle()
    {
        return $this->matiere_libelle;
    }

    /**
     * @param mixed $matiere_libelle
     */
    public function setMatiereLibelle($matiere_libelle)
    {
        $this->matiere_libelle = $matiere_libelle;
    }
    /**
     * @return mixed
     */
    public function getEvenementCode()
    {
        return $this->evenement_code;
    }

    /**
     * @param mixed $evenement_code
     */
    public function setEvenementCode($evenement_code)
    {
        $this->evenement_code = $evenement_code;
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
    public function getEnseignantNom()
    {
        return $this->enseignant_nom;
    }

    /**
     * @param mixed $enseignant_nom
     */
    public function setEnseignantNom($enseignant_nom)
    {
        $this->enseignant_nom = $enseignant_nom;
    }

    /**
     * @return mixed
     */
    public function getEnseignantPrenom()
    {
        return $this->enseignant_prenom;
    }

    /**
     * @param mixed $enseignant_prenom
     */
    public function setEnseignantPrenom($enseignant_prenom)
    {
        $this->enseignant_prenom = $enseignant_prenom;
    }

    /**
     * @return mixed
     */
    public function getEvenementTypeEvenementCode()
    {
        return $this->evenement_type_evenement_code;
    }

    /**
     * @param mixed $evenement_type_evenement_code
     */
    public function setEvenementTypeEvenementCode($evenement_type_evenement_code)
    {
        $this->evenement_type_evenement_code = $evenement_type_evenement_code;
    }

    /**
     * @return mixed
     */
    public function getEvenementTypeEvenement()
    {
        return $this->evenement_type_evenement;
    }

    /**
     * @param mixed $evenement_type_evenement
     */
    public function setEvenementTypeEvenement($evenement_type_evenement)
    {
        $this->evenement_type_evenement = $evenement_type_evenement;
    }

    /**
     * @return mixed
     */
    public function getEvenementDate()
    {
        return $this->evenement_date;
    }

    /**
     * @param mixed $evenement_date
     */
    public function setEvenementDate($evenement_date)
    {
        $this->evenement_date = $evenement_date;
    }

    /**
     * @return mixed
     */
    public function getEvenementHeureDebut()
    {
        return $this->evenement_heure_debut;
    }

    /**
     * @param mixed $evenement_heure_debut
     */
    public function setEvenementHeureDebut($evenement_heure_debut)
    {
        $this->evenement_heure_debut = $evenement_heure_debut;
    }

    /**
     * @return mixed
     */
    public function getEvenementHeureFin()
    {
        return $this->evenement_heure_fin;
    }

    /**
     * @param mixed $evenement_heure_fin
     */
    public function setEvenementHeureFin($evenement_heure_fin)
    {
        $this->evenement_heure_fin = $evenement_heure_fin;
    }

    /**
     * @return mixed
     */
    public function getEvenementDuree()
    {
        return $this->evenement_duree;
    }

    /**
     * @param mixed $evenement_duree
     */
    public function setEvenementDuree($evenement_duree)
    {
        $this->evenement_duree = $evenement_duree;
    }

    /**
     * @return mixed
     */
    public function getEvenementCommentaire()
    {
        return $this->evenement_commentaire;
    }

    /**
     * @param mixed $evenement_commentaire
     */
    public function setEvenementCommentaire($evenement_commentaire)
    {
        $this->evenement_commentaire = $evenement_commentaire;
    }

    /**
     * @return mixed
     */
    public function getEvenementValide()
    {
        return $this->evenement_valide;
    }

    /**
     * @param mixed $evenement_valide
     */
    public function setEvenementValide($evenement_valide)
    {
        $this->evenement_valide = $evenement_valide;
    }

    /**
     * @return mixed
     */
    public function getEvenementSalleCode()
    {
        return $this->evenement_salle_code;
    }

    /**
     * @param mixed $evenement_salle_code
     */
    public function setEvenementSalleCode($evenement_salle_code)
    {
        $this->evenement_salle_code = $evenement_salle_code;
    }

    /**
     * @return mixed
     */
    public function getEvenementSalle()
    {
        return $this->evenement_salle;
    }

    /**
     * @param mixed $evenement_salle
     */
    public function setEvenementSalle($evenement_salle)
    {
        $this->evenement_salle = $evenement_salle;
    }

    /**
     * @return mixed
     */
    public function getEvenementLieu()
    {
        return $this->evenement_lieu;
    }

    /**
     * @param mixed $evenement_lieu
     */
    public function setEvenementLieu($evenement_lieu)
    {
        $this->evenement_lieu = $evenement_lieu;
    }

    /**
     * @return mixed
     */
    public function getEnseignantNomUsage()
    {
        return $this->enseignant_nom_usage;
    }

    /**
     * @param mixed $enseignant_nom_usage
     */
    public function setEnseignantNomUsage($enseignant_nom_usage)
    {
        $this->enseignant_nom_usage = $enseignant_nom_usage;
    }

}