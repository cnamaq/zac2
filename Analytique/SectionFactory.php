<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


class SectionFactory
{
    protected $site = array(
        'Centre de Bordeaux' => 'BDX',
        'Centre de Pau'      => 'PAU',
        'Centre d\'Anglet'   => 'CBQ',
        'default'            => 'AQU',
    );

    protected $composante = array(
        'Cnam'  => 'CN',
        'ENASS' => 'EN',
        'ICSV'  => 'MA',
        'INTEC' => 'GE',
        'Hors Cnam' => 'HC',
        'default'   => 'XX',
    );

    protected $modalite = array(
        'FOD régionale'     => 'FD',
        'FOD'               => 'FD',
        'Formation Hybride' => 'MX',
        'Présentiel'        => 'PR',
        'default'           => 'XX',
    );

    protected $projet = array(
        'default' => 'CRA',
    );

    /**
     * @param  LigneInterface $ligne
     * @return Section
     */
    public function create(LigneInterface $ligne)
    {
        return new Section(array(
            'site'          => self::getSousSectionCode($this->site,       $ligne->getCodeForSiteAnalytique()),
            'composante'    => self::getSousSectionCode($this->composante, $ligne->getCodeForComposanteAnalytique()),
            'modalite'      => self::getSousSectionCode($this->modalite,   $ligne->getCodeForModaliteAnalytique()),
            'projet'        => self::getSousSectionCode($this->projet,     $ligne->getCodeForProjetAnalytique()),
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
