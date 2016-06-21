<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


interface LigneInterface
{
    function getMontant();
    function getCodeForSiteAnalytique();
    function getCodeForComposanteAnalytique();
    function getCodeForModaliteAnalytique();
    function getCodeForProjetAnalytique();
}
