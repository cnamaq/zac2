<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique2;

class Section
{
    /**
     * @var string
     */
    protected $etablissement;
    /**
     * @var string
     */
    protected $budget;
    /**
     * @var string
     */
    protected $produit;
    /**
     * @var string
     */
    protected $bpf;

    /**
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * @param string $etablissement
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;
    }

    /**
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param string $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return string
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param string $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return string
     */
    public function getBpf()
    {
        return $this->bpf;
    }

    /**
     * @param string $bpf
     */
    public function setBpf($bpf)
    {
        $this->bpf = $bpf;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getEtablissement() . $this->getBudget() . $this->getProduit() . $this->getBpf();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getId();
    }

}
