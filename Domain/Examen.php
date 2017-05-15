<?php
/**
 * @author Sébastien Roux
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class Examen extends EntityAbstract
{

    protected $centre_code;
    protected $annee;
    protected $unite_numero;
    protected $groupe_code;
    protected $semestre_code;
    protected $session_examen_libelle;

    protected $annee_universitaire;
    protected $centre_libelle;
    protected $unite_code;
    protected $unite_libelle1;
    protected $unite_ects;
    protected $groupe_libelle;
    protected $semestre_libelle;
    protected $enseignant_code;
    protected $enseignant_nom;
    protected $enseignant_prenom;

    protected $examen_salle_code;
    protected $examen_salle;
    protected $examen_lieu;
    protected $examen_date;
    protected $examen_heure_debut;
    protected $examen_heure_fin;
    protected $examen_duree;

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
    public function getSessionExamenLibelle()
    {
        return $this->session_examen_libelle;
    }

    /**
     * @param mixed $session_examen_libelle
     */
    public function setSessionExamenLibelle($session_examen_libelle)
    {
        $this->session_examen_libelle = $session_examen_libelle;
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
    public function getExamenSalleCode()
    {
        return $this->examen_salle_code;
    }

    /**
     * @param mixed $examen_salle_code
     */
    public function setExamenSalleCode($examen_salle_code)
    {
        $this->examen_salle_code = $examen_salle_code;
    }

    /**
     * @return mixed
     */
    public function getExamenSalle()
    {
        return $this->examen_salle;
    }

    /**
     * @param mixed $examen_salle
     */
    public function setExamenSalle($examen_salle)
    {
        $this->examen_salle = $examen_salle;
    }

    /**
     * @return mixed
     */
    public function getExamenLieu()
    {
        return $this->examen_lieu;
    }

    /**
     * @param mixed $examen_lieu
     */
    public function setExamenLieu($examen_lieu)
    {
        $this->examen_lieu = $examen_lieu;
    }

    /**
     * @return mixed
     */
    public function getExamenDate()
    {
        return $this->examen_date;
    }

    /**
     * @param mixed $examen_date
     */
    public function setExamenDate($examen_date)
    {
        $this->examen_date = $examen_date;
    }

    /**
     * @return mixed
     */
    public function getExamenHeureDebut()
    {
        return $this->examen_heure_debut;
    }

    /**
     * @param mixed $examen_heure_debut
     */
    public function setExamenHeureDebut($examen_heure_debut)
    {
        $this->examen_heure_debut = $examen_heure_debut;
    }

    /**
     * @return mixed
     */
    public function getExamenHeureFin()
    {
        return $this->examen_heure_fin;
    }

    /**
     * @param mixed $examen_heure_fin
     */
    public function setExamenHeureFin($examen_heure_fin)
    {
        $this->examen_heure_fin = $examen_heure_fin;
    }

    /**
     * @return mixed
     */
    public function getExamenDuree()
    {
        return $this->examen_duree;
    }

    /**
     * @param mixed $examen_duree
     */
    public function setExamenDuree($examen_duree)
    {
        $this->examen_duree = $examen_duree;
    }



}