<?php
/**
 * Created by PhpStorm.
 * User: fohl
 * Date: 12/05/16
 * Time: 16:01
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class BaseForfaitaireGrille extends EntityAbstract
{
    /**
     * @var array
     */
    protected $baseForfaitaireGrille = array();

    public function getBaseForfaitaire($montant)
    {
        if (empty($this->baseForfaitaireGrille)) {
            throw new \Exception('Pas de grille des bases forfaitaire');
        }

        foreach ($this->baseForfaitaireGrille as $intervalle) {
            if ($montant >= $intervalle['borne1'] && $montant <= $intervalle['borne2']) {
                return $intervalle['base'];
            }
        }

        if ($montant > $intervalle['borne2']) {
            return $montant;
        }

        return null;
    }

    /**
     * @return array
     */
    public function getBaseForfaitaireGrille()
    {
        return $this->baseForfaitaireGrille;
    }

    /**
     * @param array $baseForfaitaireGrille
     */
    public function setBaseForfaitaireGrille(array $baseForfaitaireGrille)
    {
        $this->baseForfaitaireGrille = $baseForfaitaireGrille;
    }


}