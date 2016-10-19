<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


class SectionFactory
{
    /**
     * @var array
     */
    protected $site = array(
        'BX' => 'BDX',
        'PA' => 'PAU',
        'CB' => 'CBQ',
        'Centre de Bordeaux' => 'BDX',
        'Centre de Pau' => 'PAU',
        'Centre d\'Anglet' => 'CBQ',
        'Centre de Côte Basque' => 'CBQ',
        'default' => 'AQU',
    );
    /**
     * @var array
     */
    protected $composante = array(
        'Cnam' => 'CN',
        'ENASS' => 'EN',
        'Enass' => 'EN',
        'ICSV' => 'MA',
        'INTEC' => 'GE',
        'Intec' => 'GE',
        'ICH' => 'IH',
        'ICH hors cursus' => 'YH',
        'Hors Cnam' => 'HC',
        'default' => 'XX',
    );
    /**
     * @var array
     */
    protected $modalite = array(
        'FOD régionale' => 'FD',
        'FOD' => 'FD',
        'Formation Hybride' => 'MX',
        'Présentiel' => 'PR',
        'default' => 'XX',
    );
    /**
     * @var array
     */
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
            'site'          => self::getSousSectionCode('site', $ligne->getCodeForSiteAnalytique()),
            'composante'    => self::getSousSectionCode('composante', $ligne->getCodeForComposanteAnalytique()),
            'modalite'      => self::getSousSectionCode('modalite', $ligne->getCodeForModaliteAnalytique()),
            'projet'        => self::getSousSectionCode('projet', $ligne->getCodeForProjetAnalytique()),
        ));
    }

    /**
     * @param string $sousSection
     * @param string $code
     * @return string
     * @throws \Exception
     */
    public function getSousSectionCode($sousSection, $code)
    {
        if (!isset($this->$sousSection)) {
            throw new \Exception('la sous section analytique ' . $sousSection . "n'existe pas.");
        }
        $data = $this->$sousSection;
        if (!array_key_exists('default', $data)) {
            throw new \Exception('valeur par défaut absente du tableau : ' . implode('-', $data));
        }

        return (array_key_exists($code, $data)) ? $data[$code] : $data['default'];
    }

    /**
     * @return Section
     */
    public function getDefaultSection()
    {
        return new Section(array(
            'site'       => $this->site['default'],
            'composante' => $this->composante['default'],
            'modalite'   => $this->modalite['default'],
            'projet'     => $this->projet['default'],
        ));
    }

}
