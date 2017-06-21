<?php

namespace Zac2\Analytique2;

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
        $ventilationLigne->setSection(SectionFactory::create($ligne));

        return $ventilationLigne;
    }
}