<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique2;

interface PieceInterface
{
    /**
     * @return Ventilation
     */
    function getVentilation();

    /**
     * @return LigneInterface[]
     */
    function getLignes();
}
