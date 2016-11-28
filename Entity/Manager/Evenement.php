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

class Evenement extends DicAware implements ManagerInterface
{
    public function getEm($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT DISTINCT
                          ev.*,
                          em.emargement_heures_presence AS heures_realisees
                FROM      evenement_aqu ev
                LEFT JOIN emargement_aqu em
                ON        em.evenement_code = ev.evenement_code";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('p.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->get('\Zac2\Domain\Evenement', $filtre);
    }

    public function getArrayData($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->getArrayData($entity, $filtre);
    }

}
