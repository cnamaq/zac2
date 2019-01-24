<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Doctrine\ORM\Mapping as ORM;

use Zac2\Entity\EntityAbstract;

/**
 * @ORM\Entity @ORM\Table(name="fae_pca")
 */
class FaePca extends EntityAbstract
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $id;
    /** @ORM\Column(type="integer") **/
    protected $priseEnChargeNumero;
    /** @ORM\Column(type="integer") **/
    protected $annee;
    /** @ORM\Column(type="float") **/
    protected $CA;
    /** @ORM\Column(type="float") **/
    protected $FAE;
    /** @ORM\Column(type="float") **/
    protected $PCA;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPriseEnChargeNumero()
    {
        return $this->priseEnChargeNumero;
    }

    /**
     * @param mixed $priseEnChargeNumero
     */
    public function setPriseEnChargeNumero($priseEnChargeNumero)
    {
        $this->priseEnChargeNumero = $priseEnChargeNumero;
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
    public function getCA()
    {
        return $this->CA;
    }

    /**
     * @param mixed $CA
     */
    public function setCA($CA)
    {
        $this->CA = $CA;
    }

    /**
     * @return mixed
     */
    public function getFAE()
    {
        return $this->FAE;
    }

    /**
     * @param mixed $FAE
     */
    public function setFAE($FAE)
    {
        $this->FAE = $FAE;
    }

    /**
     * @return mixed
     */
    public function getPCA()
    {
        return $this->PCA;
    }

    /**
     * @param mixed $PCA
     */
    public function setPCA($PCA)
    {
        $this->PCA = $PCA;
    }

}