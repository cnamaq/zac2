<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class Unite extends EntityAbstract
{
    protected $unite_numero;
    protected $unite_genre;
    protected $unite_type_activite_code;
    protected $unite_type_activite_libelle;
    protected $unite_type_unite;
    protected $unite_pole_code;
    protected $unite_pole_libelle;
    protected $unite_code;
    protected $unite_annee_creation;
    protected $unite_libelle1;
    protected $unite_ects;
    protected $type_notation_numero;
    protected $unite_moyenne;
    protected $unite_moyenne_reelle;
    protected $unite_nb_heure;
    protected $unite_nb_heure_cours;
    protected $unite_nb_heure_td;
    protected $unite_nb_heure_tp;
    protected $unite_nb_heure_ds;
    protected $unite_nb_heure_autre;
    protected $unite_contenu;
    protected $unite_finalite;
    protected $unite_public;
    protected $unite_modalite_validation;
    protected $unite_type_notation;
    protected $unite_actif;
    protected $unite_examen_national;
    protected $unite_type_codification;
    protected $equipe_pedagogique_libelle;
    protected $departement_libelle;
    protected $ecole_libelle;
    protected $unite_type_unite_code;
    protected $unite_valeur;
    protected $unite_cycle;

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
    public function getUniteGenre()
    {
        return $this->unite_genre;
    }

    /**
     * @param mixed $unite_genre
     */
    public function setUniteGenre($unite_genre)
    {
        $this->unite_genre = $unite_genre;
    }

    /**
     * @return mixed
     */
    public function getUniteTypeActiviteCode()
    {
        return $this->unite_type_activite_code;
    }

    /**
     * @param mixed $unite_type_activite_code
     */
    public function setUniteTypeActiviteCode($unite_type_activite_code)
    {
        $this->unite_type_activite_code = $unite_type_activite_code;
    }

    /**
     * @return mixed
     */
    public function getUniteTypeActiviteLibelle()
    {
        return $this->unite_type_activite_libelle;
    }

    /**
     * @param mixed $unite_type_activite_libelle
     */
    public function setUniteTypeActiviteLibelle($unite_type_activite_libelle)
    {
        $this->unite_type_activite_libelle = $unite_type_activite_libelle;
    }

    /**
     * @return mixed
     */
    public function getUniteTypeUnite()
    {
        return $this->unite_type_unite;
    }

    /**
     * @param mixed $unite_type_unite
     */
    public function setUniteTypeUnite($unite_type_unite)
    {
        $this->unite_type_unite = $unite_type_unite;
    }

    /**
     * @return mixed
     */
    public function getUnitePoleCode()
    {
        return $this->unite_pole_code;
    }

    /**
     * @param mixed $unite_pole_code
     */
    public function setUnitePoleCode($unite_pole_code)
    {
        $this->unite_pole_code = $unite_pole_code;
    }

    /**
     * @return mixed
     */
    public function getUnitePoleLibelle()
    {
        return $this->unite_pole_libelle;
    }

    /**
     * @param mixed $unite_pole_libelle
     */
    public function setUnitePoleLibelle($unite_pole_libelle)
    {
        $this->unite_pole_libelle = $unite_pole_libelle;
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
    public function getUniteAnneeCreation()
    {
        return $this->unite_annee_creation;
    }

    /**
     * @param mixed $unite_annee_creation
     */
    public function setUniteAnneeCreation($unite_annee_creation)
    {
        $this->unite_annee_creation = $unite_annee_creation;
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
    public function getTypeNotationNumero()
    {
        return $this->type_notation_numero;
    }

    /**
     * @param mixed $type_notation_numero
     */
    public function setTypeNotationNumero($type_notation_numero)
    {
        $this->type_notation_numero = $type_notation_numero;
    }

    /**
     * @return mixed
     */
    public function getUniteMoyenne()
    {
        return $this->unite_moyenne;
    }

    /**
     * @param mixed $unite_moyenne
     */
    public function setUniteMoyenne($unite_moyenne)
    {
        $this->unite_moyenne = $unite_moyenne;
    }

    /**
     * @return mixed
     */
    public function getUniteMoyenneReelle()
    {
        return $this->unite_moyenne_reelle;
    }

    /**
     * @param mixed $unite_moyenne_reelle
     */
    public function setUniteMoyenneReelle($unite_moyenne_reelle)
    {
        $this->unite_moyenne_reelle = $unite_moyenne_reelle;
    }

    /**
     * @return mixed
     */
    public function getUniteNbHeure()
    {
        return $this->unite_nb_heure;
    }

    /**
     * @param mixed $unite_nb_heure
     */
    public function setUniteNbHeure($unite_nb_heure)
    {
        $this->unite_nb_heure = $unite_nb_heure;
    }

    /**
     * @return mixed
     */
    public function getUniteNbHeureCours()
    {
        return $this->unite_nb_heure_cours;
    }

    /**
     * @param mixed $unite_nb_heure_cours
     */
    public function setUniteNbHeureCours($unite_nb_heure_cours)
    {
        $this->unite_nb_heure_cours = $unite_nb_heure_cours;
    }

    /**
     * @return mixed
     */
    public function getUniteNbHeureTd()
    {
        return $this->unite_nb_heure_td;
    }

    /**
     * @param mixed $unite_nb_heure_td
     */
    public function setUniteNbHeureTd($unite_nb_heure_td)
    {
        $this->unite_nb_heure_td = $unite_nb_heure_td;
    }

    /**
     * @return mixed
     */
    public function getUniteNbHeureTp()
    {
        return $this->unite_nb_heure_tp;
    }

    /**
     * @param mixed $unite_nb_heure_tp
     */
    public function setUniteNbHeureTp($unite_nb_heure_tp)
    {
        $this->unite_nb_heure_tp = $unite_nb_heure_tp;
    }

    /**
     * @return mixed
     */
    public function getUniteNbHeureDs()
    {
        return $this->unite_nb_heure_ds;
    }

    /**
     * @param mixed $unite_nb_heure_ds
     */
    public function setUniteNbHeureDs($unite_nb_heure_ds)
    {
        $this->unite_nb_heure_ds = $unite_nb_heure_ds;
    }

    /**
     * @return mixed
     */
    public function getUniteNbHeureAutre()
    {
        return $this->unite_nb_heure_autre;
    }

    /**
     * @param mixed $unite_nb_heure_autre
     */
    public function setUniteNbHeureAutre($unite_nb_heure_autre)
    {
        $this->unite_nb_heure_autre = $unite_nb_heure_autre;
    }

    /**
     * @return mixed
     */
    public function getUniteContenu()
    {
        return $this->unite_contenu;
    }

    /**
     * @param mixed $unite_contenu
     */
    public function setUniteContenu($unite_contenu)
    {
        $this->unite_contenu = $unite_contenu;
    }

    /**
     * @return mixed
     */
    public function getUniteFinalite()
    {
        return $this->unite_finalite;
    }

    /**
     * @param mixed $unite_finalite
     */
    public function setUniteFinalite($unite_finalite)
    {
        $this->unite_finalite = $unite_finalite;
    }

    /**
     * @return mixed
     */
    public function getUnitePublic()
    {
        return $this->unite_public;
    }

    /**
     * @param mixed $unite_public
     */
    public function setUnitePublic($unite_public)
    {
        $this->unite_public = $unite_public;
    }

    /**
     * @return mixed
     */
    public function getUniteModaliteValidation()
    {
        return $this->unite_modalite_validation;
    }

    /**
     * @param mixed $unite_modalite_validation
     */
    public function setUniteModaliteValidation($unite_modalite_validation)
    {
        $this->unite_modalite_validation = $unite_modalite_validation;
    }

    /**
     * @return mixed
     */
    public function getUniteTypeNotation()
    {
        return $this->unite_type_notation;
    }

    /**
     * @param mixed $unite_type_notation
     */
    public function setUniteTypeNotation($unite_type_notation)
    {
        $this->unite_type_notation = $unite_type_notation;
    }

    /**
     * @return mixed
     */
    public function getUniteActif()
    {
        return $this->unite_actif;
    }

    /**
     * @param mixed $unite_actif
     */
    public function setUniteActif($unite_actif)
    {
        $this->unite_actif = $unite_actif;
    }

    /**
     * @return mixed
     */
    public function getUniteExamenNational()
    {
        return $this->unite_examen_national;
    }

    /**
     * @param mixed $unite_examen_national
     */
    public function setUniteExamenNational($unite_examen_national)
    {
        $this->unite_examen_national = $unite_examen_national;
    }

    /**
     * @return mixed
     */
    public function getUniteTypeCodification()
    {
        return $this->unite_type_codification;
    }

    /**
     * @param mixed $unite_type_codification
     */
    public function setUniteTypeCodification($unite_type_codification)
    {
        $this->unite_type_codification = $unite_type_codification;
    }

    /**
     * @return mixed
     */
    public function getEquipePedagogiqueLibelle()
    {
        return $this->equipe_pedagogique_libelle;
    }

    /**
     * @param mixed $equipe_pedagogique_libelle
     */
    public function setEquipePedagogiqueLibelle($equipe_pedagogique_libelle)
    {
        $this->equipe_pedagogique_libelle = $equipe_pedagogique_libelle;
    }

    /**
     * @return mixed
     */
    public function getDepartementLibelle()
    {
        return $this->departement_libelle;
    }

    /**
     * @param mixed $departement_libelle
     */
    public function setDepartementLibelle($departement_libelle)
    {
        $this->departement_libelle = $departement_libelle;
    }

    /**
     * @return mixed
     */
    public function getEcoleLibelle()
    {
        return $this->ecole_libelle;
    }

    /**
     * @param mixed $ecole_libelle
     */
    public function setEcoleLibelle($ecole_libelle)
    {
        $this->ecole_libelle = $ecole_libelle;
    }

    /**
     * @return mixed
     */
    public function getUniteTypeUniteCode()
    {
        return $this->unite_type_unite_code;
    }

    /**
     * @param mixed $unite_type_unite_code
     */
    public function setUniteTypeUniteCode($unite_type_unite_code)
    {
        $this->unite_type_unite_code = $unite_type_unite_code;
    }

    /**
     * @return mixed
     */
    public function getUniteValeur()
    {
        return $this->unite_valeur;
    }

    /**
     * @param mixed $unite_valeur
     */
    public function setUniteValeur($unite_valeur)
    {
        $this->unite_valeur = $unite_valeur;
    }

    /**
     * @return mixed
     */
    public function getUniteCycle()
    {
        return $this->unite_cycle;
    }

    /**
     * @param mixed $unite_cycle
     */
    public function setUniteCycle($unite_cycle)
    {
        $this->unite_cycle = $unite_cycle;
    }

}