<?php
namespace Zac2\Domain;

use Zac2\Analytique2\LigneInterface;
use Zac2\Analytique2\PieceLigneTrait;
use Zac2\Common\DateTime;
use Zac2\Entity\EntityAbstract;

/**
 * @author Denis Fohl
 */
class Forfait extends EntityAbstract implements LigneInterface
{
    use PieceLigneTrait;
    /** @var  int */
    protected $annee;
    /** @var  string */
    protected $anneeUniversitaire;
    /** @var  int */
    protected $centreCode;
    /** @var  string */
    protected $centreLibelle;
    /** @var  int */
    protected $enseignantCode;
    /** @var  string */
    protected $enseignantNom;
    /** @var  string */
    protected $enseignantPrenom;
    /** @var  string */
    protected $enseignantNomUsage;
    /** @var  string */
    protected $remunerationForfaitaireBordereau;
    /** @var  DateTime */
    protected $remunerationForfaitaireBordereauDate;
    /** @var  string */
    protected $remunerationForfaitaireLibelle;
    /** @var  string */
    protected $remunerationForfaitaireTypeSaisie;
    /** @var  float */
    protected $remunerationForfaitaireMontantTotal;
    /** @var  float */
    protected $remunerationForfaitaireHeuresTotal;
    /** @var  float */
    protected $remunerationForfaitaireHeuresCours;
    /** @var  float */
    protected $remunerationForfaitaireHeuresTd;
    /** @var  float */
    protected $remunerationForfaitaireHeuresTp;
    /** @var  float */
    protected $remunerationForfaitaireHeuresExamen;
    /** @var  float */
    protected $remunerationForfaitaireHeuresAutre;
    /** @var  string */
    protected $remunerationForfaitairePayee;
    /** @var  string */
    protected $remuneration_forfaitaire_memo;
    /** @var  int */
    protected $enseignant_matricule;
    /** @var  string */
    protected $bordereau_annee_universitaire;
    /** @var  int */
    protected $unite_numero;
    /** @var  string */
    protected $unite_code;
    /** @var  string */
    protected $unite_libelle;
    /** @var  int */
    protected $unite_ects;
    /** @var  int */
    protected $semestre_code;
    /** @var  string */
    protected $semestre_libelle;
    /** @var  int */
    protected $groupe_code;
    /** @var  string */
    protected $groupe_libelle;
    /** @var  string */
    protected $modalite;
    /** @var  int */
    protected $regroupement_programme_code;
    /** @var  string */
    protected $regroupement_programme_libelle;

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
     * @return int
     */
    public function getCentreCode()
    {
        return $this->centreCode;
    }

    /**
     * @param int $centreCode
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
     * @return int
     */
    public function getEnseignantCode()
    {
        return $this->enseignantCode;
    }

    /**
     * @param int $enseignantCode
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
     * @return DateTime
     */
    public function getRemunerationForfaitaireBordereauDate()
    {
        return $this->remunerationForfaitaireBordereauDate;
    }

    /**
     * @param DateTime $remunerationForfaitaireBordereauDate
     */
    public function setRemunerationForfaitaireBordereauDate($remunerationForfaitaireBordereauDate)
    {
        $this->remunerationForfaitaireBordereauDate = new DateTime($remunerationForfaitaireBordereauDate);
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
     * @return float
     */
    public function getRemunerationForfaitaireMontantTotal()
    {
        return $this->remunerationForfaitaireMontantTotal;
    }

    /**
     * @param float $remunerationForfaitaireMontantTotal
     */
    public function setRemunerationForfaitaireMontantTotal($remunerationForfaitaireMontantTotal)
    {
        $this->remunerationForfaitaireMontantTotal = $remunerationForfaitaireMontantTotal;
    }

    /**
     * @return float
     */
    public function getRemunerationForfaitaireHeuresTotal()
    {
        return $this->remunerationForfaitaireHeuresTotal;
    }

    /**
     * @param float $remunerationForfaitaireHeuresTotal
     */
    public function setRemunerationForfaitaireHeuresTotal($remunerationForfaitaireHeuresTotal)
    {
        $this->remunerationForfaitaireHeuresTotal = $remunerationForfaitaireHeuresTotal;
    }

    /**
     * @return float
     */
    public function getRemunerationForfaitaireHeuresCours()
    {
        return $this->remunerationForfaitaireHeuresCours;
    }

    /**
     * @param float $remunerationForfaitaireHeuresCours
     */
    public function setRemunerationForfaitaireHeuresCours($remunerationForfaitaireHeuresCours)
    {
        $this->remunerationForfaitaireHeuresCours = $remunerationForfaitaireHeuresCours;
    }

    /**
     * @return float
     */
    public function getRemunerationForfaitaireHeuresTd()
    {
        return $this->remunerationForfaitaireHeuresTd;
    }

    /**
     * @param float $remunerationForfaitaireHeuresTd
     */
    public function setRemunerationForfaitaireHeuresTd($remunerationForfaitaireHeuresTd)
    {
        $this->remunerationForfaitaireHeuresTd = $remunerationForfaitaireHeuresTd;
    }

    /**
     * @return float
     */
    public function getRemunerationForfaitaireHeuresTp()
    {
        return $this->remunerationForfaitaireHeuresTp;
    }

    /**
     * @param float $remunerationForfaitaireHeuresTp
     */
    public function setRemunerationForfaitaireHeuresTp($remunerationForfaitaireHeuresTp)
    {
        $this->remunerationForfaitaireHeuresTp = $remunerationForfaitaireHeuresTp;
    }

    /**
     * @return float
     */
    public function getRemunerationForfaitaireHeuresExamen()
    {
        return $this->remunerationForfaitaireHeuresExamen;
    }

    /**
     * @param float $remunerationForfaitaireHeuresExamen
     */
    public function setRemunerationForfaitaireHeuresExamen($remunerationForfaitaireHeuresExamen)
    {
        $this->remunerationForfaitaireHeuresExamen = $remunerationForfaitaireHeuresExamen;
    }

    /**
     * @return float
     */
    public function getRemunerationForfaitaireHeuresAutre()
    {
        return $this->remunerationForfaitaireHeuresAutre;
    }

    /**
     * @param float $remunerationForfaitaireHeuresAutre
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
    public function getBordereauAnneeUniversitaire()
    {
        return $this->bordereau_annee_universitaire;
    }

    /**
     * @param string $bordereau_annee_universitaire
     */
    public function setBordereauAnneeUniversitaire($bordereau_annee_universitaire)
    {
        $this->bordereau_annee_universitaire = $bordereau_annee_universitaire;
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
    public function getUniteLibelle()
    {
        return $this->unite_libelle;
    }

    /**
     * @param string $unite_libelle
     */
    public function setUniteLibelle($unite_libelle)
    {
        $this->unite_libelle = $unite_libelle;
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
     * @return bool
     * @throws \Exception
     */
    public function isNFO()
    {
        $NFO = array(
            'Coordination pédagogique',
            'Accompagnement VAE / VAP85 / VES',
        );

        return in_array($this->getRemunerationForfaitaireLibelle(), $NFO);
    }

    /**
     * @return float
     */
    function getMontant()
    {
        return $this->getRemunerationForfaitaireMontantTotal();
    }

}
