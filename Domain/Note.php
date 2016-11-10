<?php

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class Note extends EntityAbstract
{
    /**
     * @var string
     */
    protected $annee;
    /**
     * @var string
     */
    protected $centre_code;
    /**
     * @var string
     */
    protected $auditeur_numero;
    /**
     * @var string
     */
    protected $semestre_code;
    /**
     * @var string
     */
    protected $unite_numero;
    /**
     * @var string
     */
    protected $type_examen;
    /**
     * @var string
     */
    protected $examen_date;
    /**
     * @var string
     */
    protected $examen_heure;
    /**
     * @var string
     */
    protected $annee_universitaire;
    /**
     * @var string
     */
    protected $centre_libelle;
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
    protected $semestre_libelle;
    /**
     * @var string
     */
    protected $unite_code;
    /**
     * @var string
     */
    protected $unite_libelle1;
    /**
     * @var string
     */
    protected $unite_ects;
    /**
     * @var string
     */
    protected $modalite;
    /**
     * @var string
     */
    protected $groupe_code;
    /**
     * @var string
     */
    protected $groupe_libelle;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $note_reel;
    /**
     * @var string
     */
    protected $note_max;

    /**
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param string $annee
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
    public function getAuditeurNumero()
    {
        return $this->auditeur_numero;
    }

    /**
     * @param string $auditeur_numero
     */
    public function setAuditeurNumero($auditeur_numero)
    {
        $this->auditeur_numero = $auditeur_numero;
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
    public function getUniteNumero()
    {
        return $this->unite_numero;
    }

    /**
     * @param string $unite_numero
     */
    public function setUniteNumero($unite_numero)
    {
        $this->unite_numero = $unite_numero;
    }

    /**
     * @return string
     */
    public function getTypeExamen()
    {
        return $this->type_examen;
    }

    /**
     * @param string $type_examen
     */
    public function setTypeExamen($type_examen)
    {
        $this->type_examen = $type_examen;
    }

    /**
     * @return string
     */
    public function getExamenDate()
    {
        return $this->examen_date;
    }

    /**
     * @param string $examen_date
     */
    public function setExamenDate($examen_date)
    {
        $this->examen_date = $examen_date;
    }

    /**
     * @return string
     */
    public function getExamenHeure()
    {
        return $this->examen_heure;
    }

    /**
     * @param string $examen_heure
     */
    public function setExamenHeure($examen_heure)
    {
        $this->examen_heure = $examen_heure;
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
     * @return string
     */
    public function getUniteEcts()
    {
        return $this->unite_ects;
    }

    /**
     * @param string $unite_ects
     */
    public function setUniteEcts($unite_ects)
    {
        $this->unite_ects = $unite_ects;
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
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getNoteReel()
    {
        return $this->note_reel;
    }

    /**
     * @param string $note_reel
     */
    public function setNoteReel($note_reel)
    {
        $this->note_reel = $note_reel;
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
     * @return bool
     */
    public function isAbsentExamen()
    {
        return ($this->getNote() && $this->getNoteMax());
    }

}