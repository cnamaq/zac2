<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

/**
 * @Entity @Table(name="export_ventes")
 */
class ExportVente extends EntityAbstract
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $dateExport;
    /** @Column(type="integer") **/
    protected $factureNumero;
    /** @Column(type="float") **/
    protected $factureMontant;
    /** @Column(type="string") **/
    protected $factureRegroupementComptable;
    /** @Column(type="string") **/
    protected $factureDate;

    /**
     * @return mixed
     */
    public function getFactureDate()
    {
        return $this->factureDate;
    }

    /**
     * @param mixed $factureDate
     */
    public function setFactureDate($factureDate)
    {
        $this->factureDate = $factureDate;
    }

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
    public function getDateExport()
    {
        return $this->dateExport;
    }

    /**
     * @param mixed $dateExport
     */
    public function setDateExport($dateExport)
    {
        $this->dateExport = $dateExport;
    }

    /**
     * @return mixed
     */
    public function getFactureNumero()
    {
        return $this->factureNumero;
    }

    /**
     * @param mixed $factureNumero
     */
    public function setFactureNumero($factureNumero)
    {
        $this->factureNumero = $factureNumero;
    }

    /**
     * @return mixed
     */
    public function getFactureMontant()
    {
        return $this->factureMontant;
    }

    /**
     * @param mixed $factureMontant
     */
    public function setFactureMontant($factureMontant)
    {
        $this->factureMontant = $factureMontant;
    }

    /**
     * @return mixed
     */
    public function getFactureRegroupementComptable()
    {
        return $this->factureRegroupementComptable;
    }

    /**
     * @param mixed $factureRegroupementComptable
     */
    public function setFactureRegroupementComptable($factureRegroupementComptable)
    {
        $this->factureRegroupementComptable = $factureRegroupementComptable;
    }

}