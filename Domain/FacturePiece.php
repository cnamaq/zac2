<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class FacturePiece extends EntityAbstract
{
    /**
     * @var string
     */
    protected $auditeur_nom;

    /**
     * @return string
     */
    public function getAuditeurNom()
    {
        return $this->auditeur_nom;
    }

    /**
     * @param string $auditeur_nom
     */
    public function setAuditeurNom($auditeur_nom)
    {
        $this->auditeur_nom = $auditeur_nom;
    }
    
}
