<?php

namespace Zac2\Domain;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="etablissement")
 */
class Etablissement
{
    /**
     * @var int
     * @ORM\Id() @ORM\Column(type="integer") @ORM\GeneratedValue())
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string", name="code_nic_sage")
     */
    protected $codeNicSage;
    /**
     * @var string
     * @ORM\Column(type="string", name="code_compta_analytique")
     */
    protected $codeComptaAnalytique;
    /**
     * @var string
     * @ORM\Column(type="string", name="code_centre_gescicca")
     */
    protected $codeCentreGescicca;
    /**
     * @var string
     * @ORM\Column(type="string", name="libelle_gescicca")
     */
    protected $libelleGescicca;
    /**
     * @var string
     * @ORM\Column(type="string", name="libelle_compta_generale")
     */
    protected $libelleComptaGenerale;
    /**
     * @var string
     * @ORM\Column(type="string", name="numero_compte_compta_generale")
     */
    protected $numeroCompteComptaGenerale;

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

    /**
     * @return string
     */
    public function getLibelleComptaGenerale()
    {
        return $this->libelleComptaGenerale;
    }

    /**
     * @param string $libelleComptaGenerale
     */
    public function setLibelleComptaGenerale($libelleComptaGenerale)
    {
        $this->libelleComptaGenerale = $libelleComptaGenerale;
    }

    /**
     * @return string
     */
    public function getNumeroCompteComptaGenerale()
    {
        return $this->numeroCompteComptaGenerale;
    }

    /**
     * @param string $numeroCompteComptaGenerale
     */
    public function setNumeroCompteComptaGenerale($numeroCompteComptaGenerale)
    {
        $this->numeroCompteComptaGenerale = $numeroCompteComptaGenerale;
    }

}