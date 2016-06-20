<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class Programme extends EntityAbstract
{
    protected $annee;
    protected $annee_universitaire;
    protected $centre_code;
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
    protected $enseignant_code;
    protected $enseignant_nom;
    protected $enseignant_prenom;
    protected $a_payer_total;
    protected $a_payer_tarif_cours;
    protected $a_payer_tarif_td;
    protected $a_payer_tarif_tp;
    protected $a_payer_tarif_ds;
    protected $a_payer_tarif_autre;
    protected $signataire;
    protected $enseignant;
    protected $nombre_heure_auto_formation;
    protected $concerne_par_presentiel_enrichi;
    protected $autoriser_preinscription;
    protected $enseignant_nom_usage;

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
    public function getAPayerTotal()
    {
        return $this->a_payer_total;
    }

    /**
     * @param mixed $a_payer_total
     */
    public function setAPayerTotal($a_payer_total)
    {
        $this->a_payer_total = $a_payer_total;
    }

    /**
     * @return mixed
     */
    public function getAPayerTarifCours()
    {
        return $this->a_payer_tarif_cours;
    }

    /**
     * @param mixed $a_payer_tarif_cours
     */
    public function setAPayerTarifCours($a_payer_tarif_cours)
    {
        $this->a_payer_tarif_cours = $a_payer_tarif_cours;
    }

    /**
     * @return mixed
     */
    public function getAPayerTarifTd()
    {
        return $this->a_payer_tarif_td;
    }

    /**
     * @param mixed $a_payer_tarif_td
     */
    public function setAPayerTarifTd($a_payer_tarif_td)
    {
        $this->a_payer_tarif_td = $a_payer_tarif_td;
    }

    /**
     * @return mixed
     */
    public function getAPayerTarifTp()
    {
        return $this->a_payer_tarif_tp;
    }

    /**
     * @param mixed $a_payer_tarif_tp
     */
    public function setAPayerTarifTp($a_payer_tarif_tp)
    {
        $this->a_payer_tarif_tp = $a_payer_tarif_tp;
    }

    /**
     * @return mixed
     */
    public function getAPayerTarifDs()
    {
        return $this->a_payer_tarif_ds;
    }

    /**
     * @param mixed $a_payer_tarif_ds
     */
    public function setAPayerTarifDs($a_payer_tarif_ds)
    {
        $this->a_payer_tarif_ds = $a_payer_tarif_ds;
    }

    /**
     * @return mixed
     */
    public function getAPayerTarifAutre()
    {
        return $this->a_payer_tarif_autre;
    }

    /**
     * @param mixed $a_payer_tarif_autre
     */
    public function setAPayerTarifAutre($a_payer_tarif_autre)
    {
        $this->a_payer_tarif_autre = $a_payer_tarif_autre;
    }

    /**
     * @return mixed
     */
    public function getSignataire()
    {
        return $this->signataire;
    }

    /**
     * @param mixed $signataire
     */
    public function setSignataire($signataire)
    {
        $this->signataire = $signataire;
    }

    /**
     * @return mixed
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * @param mixed $enseignant
     */
    public function setEnseignant($enseignant)
    {
        $this->enseignant = $enseignant;
    }

    /**
     * @return mixed
     */
    public function getNombreHeureAutoFormation()
    {
        return $this->nombre_heure_auto_formation;
    }

    /**
     * @param mixed $nombre_heure_auto_formation
     */
    public function setNombreHeureAutoFormation($nombre_heure_auto_formation)
    {
        $this->nombre_heure_auto_formation = $nombre_heure_auto_formation;
    }

    /**
     * @return mixed
     */
    public function getConcerneParPresentielEnrichi()
    {
        return $this->concerne_par_presentiel_enrichi;
    }

    /**
     * @param mixed $concerne_par_presentiel_enrichi
     */
    public function setConcerneParPresentielEnrichi($concerne_par_presentiel_enrichi)
    {
        $this->concerne_par_presentiel_enrichi = $concerne_par_presentiel_enrichi;
    }

    /**
     * @return mixed
     */
    public function getAutoriserPreinscription()
    {
        return $this->autoriser_preinscription;
    }

    /**
     * @param mixed $autoriser_preinscription
     */
    public function setAutoriserPreinscription($autoriser_preinscription)
    {
        $this->autoriser_preinscription = $autoriser_preinscription;
    }

}
