<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique2;

use Zac2\Domain\Etablissement;
use Zac2\Domain\TypeBpf;
use Zac2\Domain\TypeProduit;

interface LigneInterface
{
    /**
     * @return float
     */
    public function getMontant();

    /**
     * @return TypeProduit
     */
    public function getTypeProduit();

    /**
     * @return TypeBpf
     */
    public function getTypeBpf();

    /**
     * @return Etablissement
     */
    public function getEtablissement();
}
