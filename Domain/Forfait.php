<?php
namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

/**
 * @author Denis Fohl
 */
class Forfait extends EntityAbstract
{

    /**
     * @var string
     */
    protected $annee;
    /**
     * @var string
     */
    protected $anneeUniversitaire;
    /**
     * @var string
     */
    protected $centreCode;
    /**
     * @var string
     */
    protected $centreLibelle;
    /**
     * @var string
     */
    protected $enseignantCode;
    /**
     * @var string
     */
    protected $enseignantNom;
    /**
     * @var string
     */
    protected $enseignantPrenom;
    /**
     * @var string
     */
    protected $enseignantNomUsage;
    /**
     * @var string
     */
    protected $remunerationForfaitaireBordereau;
    /**
     * @var string
     */
    protected $remunerationForfaitaireBordereauDate;
    /**
     * @var string
     */
    protected $remunerationForfaitaireLibelle;
    /**
     * @var string
     */
    protected $remunerationForfaitaireTypeSaisie;
    /**
     * @var string
     */
    protected $remunerationForfaitaireMontantTotal;
    /**
     * @var string
     */
    protected $remunerationForfaitaireHeuresTotal;
    /**
     * @var string
     */
    protected $remunerationForfaitaireHeuresCours;
    /**
     * @var string
     */
    protected $remunerationForfaitaireHeuresTd;
    /**
     * @var string
     */
    protected $remunerationForfaitaireHeuresTp;
    /**
     * @var string
     */
    protected $remunerationForfaitaireHeuresExamen;
    /**
     * @var string
     */
    protected $remunerationForfaitaireHeuresAutre;
    /**
     * @var string
     */
    protected $remunerationForfaitairePayee;
    /**
     * @var string
     */
    protected $remuneration_forfaitaire_memo;
    /**
     * @var int
     */
    protected $enseignant_matricule;
    protected $bordereau_annee_universitaire;
    protected $unite_numero;
    protected $unite_code;
    protected $unite_libelle;
    protected $unite_ects;
    protected $semestre_code;
    protected $semestre_libelle;
    protected $groupe_code;
    protected $groupe_libelle;
    protected $modalite;
    protected $regroupement_programme_code;
    protected $regroupement_programme_libelle;

    /**
     * @return mixed
     */
    public function getRegroupementProgrammeCode()
    {
        return $this->regroupement_programme_code;
    }

    /**
     * @param mixed $regroupement_programme_code
     */
    public function setRegroupementProgrammeCode($regroupement_programme_code)
    {
        $this->regroupement_programme_code = $regroupement_programme_code;
    }

    /**
     * @return mixed
     */
    public function getRegroupementProgrammeLibelle()
    {
        return $this->regroupement_programme_libelle;
    }

    /**
     * @param mixed $regroupement_programme_libelle
     */
    public function setRegroupementProgrammeLibelle($regroupement_programme_libelle)
    {
        $this->regroupement_programme_libelle = $regroupement_programme_libelle;
    }


    /**
     * @return mixed
     */
    public function getBordereauAnneeUniversitaire()
    {
        return $this->bordereau_annee_universitaire;
    }

    /**
     * @param mixed $bordereau_annee_universitaire
     */
    public function setBordereauAnneeUniversitaire($bordereau_annee_universitaire)
    {
        $this->bordereau_annee_universitaire = $bordereau_annee_universitaire;
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
    public function getAnneeUniversitaire()
    {
        return $this->anneeUniversitaire;
    }

    /**
     * @param string $anneeUniversitaire
     */
    public function setAnneeUniversitaire($anneeUniversitaire)
    {
        $this->anneeUniversitaire = $anneeUniversitaire;
    }

    /**
     * @return string
     */
    public function getCentreCode()
    {
        return $this->centreCode;
    }

    /**
     * @param string $centreCode
     */
    public function setCentreCode($centreCode)
    {
        $this->centreCode = $centreCode;
    }

    /**
     * @return string
     */
    public function getCentreLibelle()
    {
        return $this->centreLibelle;
    }

    /**
     * @param string $centreLibelle
     */
    public function setCentreLibelle($centreLibelle)
    {
        $this->centreLibelle = $centreLibelle;
    }

    /**
     * @return string
     */
    public function getEnseignantCode()
    {
        return $this->enseignantCode;
    }

    /**
     * @param string $enseignantCode
     */
    public function setEnseignantCode($enseignantCode)
    {
        $this->enseignantCode = $enseignantCode;
    }

    /**
     * @return string
     */
    public function getEnseignantNom()
    {
        return $this->enseignantNom;
    }

    /**
     * @param string $enseignantNom
     */
    public function setEnseignantNom($enseignantNom)
    {
        $this->enseignantNom = $enseignantNom;
    }

    /**
     * @return string
     */
    public function getEnseignantPrenom()
    {
        return $this->enseignantPrenom;
    }

    /**
     * @param string $enseignantPrenom
     */
    public function setEnseignantPrenom($enseignantPrenom)
    {
        $this->enseignantPrenom = $enseignantPrenom;
    }

    /**
     * @return string
     */
    public function getEnseignantNomUsage()
    {
        return $this->enseignantNomUsage;
    }

    /**
     * @param string $enseignantNomUsage
     */
    public function setEnseignantNomUsage($enseignantNomUsage)
    {
        $this->enseignantNomUsage = $enseignantNomUsage;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireBordereau()
    {
        return $this->remunerationForfaitaireBordereau;
    }

    /**
     * @param string $remunerationForfaitaireBordereau
     */
    public function setRemunerationForfaitaireBordereau($remunerationForfaitaireBordereau)
    {
        $this->remunerationForfaitaireBordereau = $remunerationForfaitaireBordereau;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireBordereauDate()
    {
        return $this->remunerationForfaitaireBordereauDate;
    }

    /**
     * @param string $remunerationForfaitaireBordereauDate
     */
    public function setRemunerationForfaitaireBordereauDate($remunerationForfaitaireBordereauDate)
    {
        $this->remunerationForfaitaireBordereauDate = $remunerationForfaitaireBordereauDate;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireLibelle()
    {
        return $this->remunerationForfaitaireLibelle;
    }

    /**
     * @param string $remunerationForfaitaireLibelle
     */
    public function setRemunerationForfaitaireLibelle($remunerationForfaitaireLibelle)
    {
        $this->remunerationForfaitaireLibelle = $remunerationForfaitaireLibelle;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireTypeSaisie()
    {
        return $this->remunerationForfaitaireTypeSaisie;
    }

    /**
     * @param string $remunerationForfaitaireTypeSaisie
     */
    public function setRemunerationForfaitaireTypeSaisie($remunerationForfaitaireTypeSaisie)
    {
        $this->remunerationForfaitaireTypeSaisie = $remunerationForfaitaireTypeSaisie;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireMontantTotal()
    {
        return $this->remunerationForfaitaireMontantTotal;
    }

    /**
     * @param string $remunerationForfaitaireMontantTotal
     */
    public function setRemunerationForfaitaireMontantTotal($remunerationForfaitaireMontantTotal)
    {
        $this->remunerationForfaitaireMontantTotal = $remunerationForfaitaireMontantTotal;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireHeuresTotal()
    {
        return $this->remunerationForfaitaireHeuresTotal;
    }

    /**
     * @param string $remunerationForfaitaireHeuresTotal
     */
    public function setRemunerationForfaitaireHeuresTotal($remunerationForfaitaireHeuresTotal)
    {
        $this->remunerationForfaitaireHeuresTotal = $remunerationForfaitaireHeuresTotal;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireHeuresCours()
    {
        return $this->remunerationForfaitaireHeuresCours;
    }

    /**
     * @param string $remunerationForfaitaireHeuresCours
     */
    public function setRemunerationForfaitaireHeuresCours($remunerationForfaitaireHeuresCours)
    {
        $this->remunerationForfaitaireHeuresCours = $remunerationForfaitaireHeuresCours;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireHeuresTd()
    {
        return $this->remunerationForfaitaireHeuresTd;
    }

    /**
     * @param string $remunerationForfaitaireHeuresTd
     */
    public function setRemunerationForfaitaireHeuresTd($remunerationForfaitaireHeuresTd)
    {
        $this->remunerationForfaitaireHeuresTd = $remunerationForfaitaireHeuresTd;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireHeuresTp()
    {
        return $this->remunerationForfaitaireHeuresTp;
    }

    /**
     * @param string $remunerationForfaitaireHeuresTp
     */
    public function setRemunerationForfaitaireHeuresTp($remunerationForfaitaireHeuresTp)
    {
        $this->remunerationForfaitaireHeuresTp = $remunerationForfaitaireHeuresTp;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireHeuresExamen()
    {
        return $this->remunerationForfaitaireHeuresExamen;
    }

    /**
     * @param string $remunerationForfaitaireHeuresExamen
     */
    public function setRemunerationForfaitaireHeuresExamen($remunerationForfaitaireHeuresExamen)
    {
        $this->remunerationForfaitaireHeuresExamen = $remunerationForfaitaireHeuresExamen;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitaireHeuresAutre()
    {
        return $this->remunerationForfaitaireHeuresAutre;
    }

    /**
     * @param string $remunerationForfaitaireHeuresAutre
     */
    public function setRemunerationForfaitaireHeuresAutre($remunerationForfaitaireHeuresAutre)
    {
        $this->remunerationForfaitaireHeuresAutre = $remunerationForfaitaireHeuresAutre;
    }

    /**
     * @return string
     */
    public function getRemunerationForfaitairePayee()
    {
        return $this->remunerationForfaitairePayee;
    }

    /**
     * @param string $remunerationForfaitairePayee
     */
    public function setRemunerationForfaitairePayee($remunerationForfaitairePayee)
    {
        $this->remunerationForfaitairePayee = $remunerationForfaitairePayee;
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

    /**
     * @return string
     */
    public function getRemunerationForfaitaireMemo()
    {
        return $this->remuneration_forfaitaire_memo;
    }

    /**
     * @param string $remuneration_forfaitaire_memo
     */
    public function setRemunerationForfaitaireMemo($remuneration_forfaitaire_memo)
    {
        $this->remuneration_forfaitaire_memo = $remuneration_forfaitaire_memo;
    }

}
