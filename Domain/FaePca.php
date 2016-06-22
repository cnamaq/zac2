<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

/**
 * @Entity @Table(name="fae_pca")
 */
class FaePca extends EntityAbstract
{
    /** @Id @Column(type="integer") **/
    protected $priseEnChargeNumero;
    /** @Column(type="integer") **/
    protected $annee;
    /** @Column(type="float") **/
    protected $caCalcule;
    /** @Column(type="float") **/
    protected $fae;
    /** @Column(type="float") **/
    protected $pca;

    /**
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param integer $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return float
     */
    public function getCaCalcule()
    {
        return $this->caCalcule;
    }

    /**
     * @param float $caCalcule
     */
    public function setCaCalcule($caCalcule)
    {
        $this->caCalcule = $caCalcule;
    }

    /**
     * @return float
     */
    public function getFae()
    {
        return $this->fae;
    }

    /**
     * @param float $fae
     */
    public function setFae($fae)
    {
        $this->fae = $fae;
    }

    /**
     * @return float
     */
    public function getPca()
    {
        return $this->pca;
    }

    /**
     * @param float $pca
     */
    public function setPca($pca)
    {
        $this->pca = $pca;
    }

    /**
     * @return int
     */
    public function getPriseEnChargeNumero()
    {
        return $this->priseEnChargeNumero;
    }

    /**
     * @param int $priseEnChargeNumero
     */
    public function setPriseEnChargeNumero($priseEnChargeNumero)
    {
        $this->priseEnChargeNumero = $priseEnChargeNumero;
    }

}