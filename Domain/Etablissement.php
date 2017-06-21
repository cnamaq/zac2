<?php

namespace Zac2\Domain;

/**
 * @Entity @Table(name="etablissement")
 */
class Etablissement
{
    /**
     * @var int
     * @Id() @Column(type="integer") @GeneratedValue())
     */
    protected $id;
    /**
     * @var string
     * @Column(type="string", name="code_nic_sage")
     */
    protected $codeNicSage;
    /**
     * @var string
     * @Column(type="string", name="code_compta_analytique")
     */
    protected $codeComptaAnalytique;
    /**
     * @var string
     * @Column(type="string", name="code_centre_gescicca")
     */
    protected $codeCentreGescicca;
    /**
     * @var string
     * @Column(type="string", name="libelle_gescicca")
     */
    protected $libelleGescicca;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCodeNicSage()
    {
        return $this->codeNicSage;
    }

    /**
     * @param string $codeNicSage
     */
    public function setCodeNicSage($codeNicSage)
    {
        $this->codeNicSage = $codeNicSage;
    }

    /**
     * @return string
     */
    public function getCodeComptaAnalytique()
    {
        return $this->codeComptaAnalytique;
    }

    /**
     * @param string $codeComptaAnalytique
     */
    public function setCodeComptaAnalytique($codeComptaAnalytique)
    {
        $this->codeComptaAnalytique = $codeComptaAnalytique;
    }

    /**
     * @return string
     */
    public function getCodeCentreGescicca()
    {
        return $this->codeCentreGescicca;
    }

    /**
     * @param string $codeCentreGescicca
     */
    public function setCodeCentreGescicca($codeCentreGescicca)
    {
        $this->codeCentreGescicca = $codeCentreGescicca;
    }

    /**
     * @return string
     */
    public function getLibelleGescicca()
    {
        return $this->libelleGescicca;
    }

    /**
     * @param string $libelleGescicca
     */
    public function setLibelleGescicca($libelleGescicca)
    {
        $this->libelleGescicca = $libelleGescicca;
    }

}