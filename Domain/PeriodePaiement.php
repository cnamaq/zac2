<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class PeriodePaiement extends EntityAbstract
{

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
    protected $periode_paiement_numero;
    /**
     * @var string
     */
    protected $periode_paiement_libelle;
    /**
     * @var DateTime
     */
    protected $periode_paiement_date_limite;

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
    public function getPeriodePaiementDateLimite()
    {
        return $this->periode_paiement_date_limite;
    }

    /**
     * @param mixed $periode_paiement_date_limite
     */
    public function setPeriodePaiementDateLimite($periode_paiement_date_limite)
    {
        $this->periode_paiement_date_limite = $periode_paiement_date_limite;
    }

    /**
     * @return mixed
     */
    public function getPeriodePaiementLibelle()
    {
        return $this->periode_paiement_libelle;
    }

    /**
     * @param mixed $periode_paiement_libelle
     */
    public function setPeriodePaiementLibelle($periode_paiement_libelle)
    {
        $this->periode_paiement_libelle = $periode_paiement_libelle;
    }

    /**
     * @return mixed
     */
    public function getPeriodePaiementNumero()
    {
        return $this->periode_paiement_numero;
    }

    /**
     * @param mixed $periode_paiement_numero
     */
    public function setPeriodePaiementNumero($periode_paiement_numero)
    {
        $this->periode_paiement_numero = $periode_paiement_numero;
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

}
