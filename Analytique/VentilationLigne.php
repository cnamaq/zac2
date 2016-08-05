<?php

namespace Zac2\Analytique;


class VentilationLigne
{
    /**
     * @var Section
     */
    protected $section;
    /**
     * @var float
     */
    protected $montant;
    /**
     * @var VentilationLigne[]
     */
    protected $ventilationLigneLst;

    /**
     * @return Section
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param Section $section
     */
    public function setSection(Section $section)
    {
        $this->section = $section;
    }

    /**
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @param VentilationLigne $ligne
     */
    public function addLigne(VentilationLigne $ligne)
    {
        $this->ventilationLigneLst[] = $ligne;
        $this->montant += $ligne->getMontant();
    }

    /**
     * @return VentilationLigne[]
     */
    public function getVentilationLigneLst()
    {
        return $this->ventilationLigneLst;
    }

    /**
     * @param VentilationLigne[] $ventilationLigneLst
     */
    public function setVentilationLigneLst(array $ventilationLigneLst)
    {
        $this->ventilationLigneLst = $ventilationLigneLst;
    }

}
