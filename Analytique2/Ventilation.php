<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique2;


class Ventilation
{
    /**
     * @var VentilationLigne[]
     */
    protected $lignes;

    /**
     * @return VentilationLigne[]
     */
    public function getLignes()
    {
        return $this->lignes;
    }

    /**
     * @param VentilationLigne[] $lignes
     */
    public function setLignes(array $lignes)
    {
        $this->lignes = $lignes;
    }

    /**
     * @param LigneInterface $ligne
     * @return bool
     */
    public function addLigne(LigneInterface $ligne)
    {
        $ventilationLigne = VentilationLigneFactory::create($ligne);
        if (!array_key_exists($ventilationLigne->getSection()->getId(), $this->lignes)) {
            $ligneParent = clone $ventilationLigne;
            $ligneParent->setMontant(0);
            $this->lignes[$ventilationLigne->getSection()->getId()] = $ligneParent;
        }
        $this->lignes[$ventilationLigne->getSection()->getId()]->addLigne($ventilationLigne);

        return true;
    }

    /**
     * @return float|int
     */
    public function getMontantTotal()
    {
        $montantTotal = 0;
        foreach ($this->lignes as $ligne) {
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
        foreach ($this->getLignes() as $ligne) {
            $repartition[$ligne->getSection()->getId()] = $ligne->getMontant() / $this->getMontantTotal();
        }

        return $repartition;
    }

}
