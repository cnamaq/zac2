<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


class Ventilation
{
    /**
     * @var VentilationLigne[]
     */
    protected $ventilationLigneLst;

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

    /**
     * @param LigneInterface $ligne
     * @return bool
     */
    public function addLigne(LigneInterface $ligne)
    {
        $ventilationLigne = VentilationLigneFactory::create($ligne);
        $factory = new SectionFactory();
        $section = $factory->create($ligne);
        if (!array_key_exists($section->getId(), $this->ventilationLigneLst)) {
            $ligneParent = clone $ventilationLigne;
            $ligneParent->setMontant(0);
            $this->ventilationLigneLst[$section->getId()] = $ligneParent;
        }
        $this->ventilationLigneLst[$section->getId()]->addLigne($ventilationLigne);

        return true;
    }

    /**
     * @return float|int
     */
    public function getMontantTotal()
    {
        $montantTotal = 0;
        foreach ($this->ventilationLigneLst as $ligne) {
            $montantTotal += $ligne->getMontant();
        }

        return $montantTotal;
    }

    /**
     * @return array
     */
    public function getRepartition()
    {
        $repartition = array();
        foreach ($this->getVentilationLigneLst() as $ligne) {
            $repartition[$ligne->getSection()->getId()] = $ligne->getMontant() / $this->getMontantTotal();
        }

        return $repartition;
    }

}
