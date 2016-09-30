<?php
/**
 * Created by PhpStorm.
 * User: fohl
 * Date: 27/05/16
 * Time: 11:43
 */

namespace Zac2\Entity\Manager;


use Zac2\Common\DicAware;
use Zac2\Data\Request\SqlString;
use Zac2\Domain\RemunerationHoraireAnnee;
use Zac2\Filter\Multi\Multi;

class TbiInscriptionUnite extends DicAware implements ManagerInterface
{
    /**
     * @param string $entity
     * @param Multi $filtre
     * @return array
     */
    public function get($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');

        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT i.*, a.* 
            FROM inscription_unite_aqu as i
            LEFT JOIN auditeur_aqu as a ON a.auditeur_numero = i.auditeur_numero";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('i.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        $result = $em->getArrayData('\Zac2\Domain\\' . ucfirst($entity), $filtre);

        return $result;
    }

}
