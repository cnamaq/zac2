<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


class Ventilation
{
    /**
     * @var LigneInterface[]
     */
    protected $lignes;

    /**
     * @return LigneInterface[]
     */
    public function getLignes()
    {
        return $this->lignes;
    }

    /**
     * @param LigneInterface[] $lignes
     */
    public function setLignes($lignes)
    {
        $this->lignes = $lignes;
    }

    public function addLigne(LigneInterface $ligne)
    {

    }

    public function getMontantTotal()
    {

    }

    public function getRepartition()
    {
        
    }

}