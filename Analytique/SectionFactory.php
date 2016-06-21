<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


class SectionFactory
{
    const SITE = array(
        'Centre de Bordeaux' => 'BDX',
        'Centre de Pau'      => 'PAU',
        'Centre d\'Anglet'   => 'CBQ',
        'default'            => 'AQU',
    );

    const COMPOSANTE = array(
        'Cnam'  => 'CN',
        'ENASS' => 'EN',
        'ICSV'  => 'MA',
        'INTEC' => 'GE',
        'Hors Cnam' => 'HC',
        'default'   => 'XX',
    );

    const MODALITE = array(
        'FOD régionale'     => 'FD',
        'FOD'               => 'FD',
        'Formation Hybride' => 'MX',
        'Présentiel'        => 'PR',
        'default'           => 'XX',
    );

    const PROJET = array(
        'default' => 'CRA',
    );

    /**
     * @param  LigneInterface $ligne
     * @return Section
     */
    public static function create(LigneInterface $ligne)
    {
        return new Section(array(
            'site'          => self::getSousSectionCode(self::SITE,       $ligne->getCodeForSiteAnalytique()),
            'composante'    => self::getSousSectionCode(self::COMPOSANTE, $ligne->getCodeForComposanteAnalytique()),
            'modalite'      => self::getSousSectionCode(self::MODALITE,   $ligne->getCodeForModaliteAnalytique()),
            'projet'        => self::getSousSectionCode(self::PROJET,     $ligne->getCodeForProjetAnalytique()),
        ));
    }

    /**
     * @param $sousSection
     * @param $code
     * @return mixed
     * @throws \Exception
     */
    protected function getSousSectionCode($sousSection, $code)
    {
        if (!array_key_exists('default', $sousSection)) {
            throw new \Exception('valeur par défaut absente du tableau : ' . implode('-',$sousSection));
        }
        return (array_key_exists($code, $sousSection)) ? $sousSection[$code] : $sousSection['default'];
    }

}
