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
use Zac2\Filter\Multi\Multi;

class TbiInscriptionUnite extends DicAware implements ManagerInterface
{
    /**
     * @param string $entity
     * @param Multi $filtre
     * @return array
     */
    public function getArrayData($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');

        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT i.*, a.*, insc.*, uo.*, u.*
            FROM inscription_unite_aqu as i
            LEFT JOIN auditeur_aqu as a ON a.auditeur_numero = i.auditeur_numero
            LEFT JOIN unite_ouverte_aqu as uo ON uo.centre_code = i.centre_code AND uo.annee = i.annee
              AND uo.unite_numero = i.unite_numero AND uo.groupe_code = i.groupe_code 
              AND uo.semestre_code = i.semestre_code
            LEFT JOIN inscription_aqu as insc ON insc.annee = i.annee 
              AND insc.centre_code = i.centre_code AND insc.auditeur_numero = i.auditeur_numero
            LEFT JOIN unite_aqu as u ON u.unite_numero = uo.unite_numero";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('i.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        $result = $em->getArrayData('\Zac2\Domain\\' . ucfirst($entity), $filtre);

        return $result;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getArrayData($entity, $filtre);
    }

}
