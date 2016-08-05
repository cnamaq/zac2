<?php

namespace Zac2\Analytique;


class VentilationLigneFactory
{
    /**
     * @param LigneInterface $ligne
     * @return VentilationLigne
     */
    static function create(LigneInterface $ligne)
    {
        $ventilationLigne = new VentilationLigne();
        $ventilationLigne->setMontant($ligne->getMontant());
        $factory = new SectionFactory();
        $ventilationLigne->setSection($factory->create($ligne));

        return $ventilationLigne;
    }
}