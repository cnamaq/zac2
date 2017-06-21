<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique2;

class SectionFactory
{
    const DEFAULT_ETABLISSEMENT = 'ETA';
    const DEFAULT_BUDGET        = 'Z99';
    const DEFAULT_PRODUIT       = 'Z999';
    const DEFAULT_BPF           = 'A999';

    /**
     * @param  LigneInterface $ligne
     * @return Section
     */
    public static function create(LigneInterface $ligne)
    {
        $section = new Section();
        $section->setEtablissement($ligne->getEtablissement()->getCodeComptaAnalytique());
        $section->setBudget($ligne->getTypeProduit()->getAnalytiqueBudget());
        $section->setProduit($ligne->getTypeProduit()->getAnalytiqueProduit());
        $section->setBpf($ligne->getTypeBpf()->getCodeComptaAnalytique());

        return $section;
    }

    public static function createDefaultSection()
    {
        $section = new Section();
        $section->setEtablissement(self::DEFAULT_ETABLISSEMENT);
        $section->setBudget(self::DEFAULT_BUDGET);
        $section->setProduit(self::DEFAULT_PRODUIT);
        $section->setBpf(self::DEFAULT_BPF);

        return $section;
    }
}
