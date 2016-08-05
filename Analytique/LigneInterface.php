<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


interface LigneInterface
{
    /**
     * @return float
     */
    function getMontant();

    /**
     * @return string
     */
    function getCodeForSiteAnalytique();

    /**
     * @return string
     */
    function getCodeForComposanteAnalytique();

    /**
     * @return string
     */
    function getCodeForModaliteAnalytique();

    /**
     * @return string
     */
    function getCodeForProjetAnalytique();
}
