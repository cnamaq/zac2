<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class RemunerationHoraire extends EntityAbstract
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
    protected $remuneration_action;
    /**
     * @var string
     */
    protected $remuneration_tranche;
    /**
     * @var float
     */
    protected $remuneration_tranche_min;
    /**
     * @var float
     */
    protected $remuneration_tranche_max;
    /**
     * @var float
     */
    protected $remuneration_tarif;

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
    public function getRemunerationAction()
    {
        return $this->remuneration_action;
    }

    /**
     * @param string $remuneration_action
     */
    public function setRemunerationAction($remuneration_action)
    {
        $this->remuneration_action = $remuneration_action;
    }

    /**
     * @return string
     */
    public function getRemunerationTranche()
    {
        return $this->remuneration_tranche;
    }

    /**
     * @param string $remuneration_tranche
     */
    public function setRemunerationTranche($remuneration_tranche)
    {
        $this->remuneration_tranche = $remuneration_tranche;
    }

    /**
     * @return float
     */
    public function getRemunerationTrancheMin()
    {
        return $this->remuneration_tranche_min;
    }

    /**
     * @param float $remuneration_tranche_min
     */
    public function setRemunerationTrancheMin($remuneration_tranche_min)
    {
        $this->remuneration_tranche_min = $remuneration_tranche_min;
    }

    /**
     * @return float
     */
    public function getRemunerationTrancheMax()
    {
        return $this->remuneration_tranche_max;
    }

    /**
     * @param float $remuneration_tranche_max
     */
    public function setRemunerationTrancheMax($remuneration_tranche_max)
    {
        $this->remuneration_tranche_max = $remuneration_tranche_max;
    }

    /**
     * @return float
     */
    public function getRemunerationTarif()
    {
        return $this->remuneration_tarif;
    }

    /**
     * @param float $remuneration_tarif
     */
    public function setRemunerationTarif($remuneration_tarif)
    {
        $this->remuneration_tarif = $remuneration_tarif;
    }

}