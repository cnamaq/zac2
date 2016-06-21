<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;

/**
 * Interface PieceInterface
 * @package Zac2\Analytique
 * composite
 */
interface PieceInterface
{
    function getVentilation();

    /**
     * @return LigneInterface[]
     */
    function getLignes();
}
