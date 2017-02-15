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
use Zac2\Entity\Manager;
use Zac2\Filter\Multi\Multi;

class Afacturer extends DicAware implements ManagerInterface
{

    public function getEm($entity, Multi $filtre)
    {
        /** @var Manager $em */
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT    *
                FROM      (
                            SELECT    af.*,
                                      f.facture_date,
                                      f.facture_date_impression
                            FROM      a_facturer_aqu af
                            JOIN      facture_detail_aqu fd
                            ON        fd.facture_detail_numero = facture_detail_aqu.facture_detail_numero
                            JOIN      facture_detail_aqu f
                            ON        f.facture_numero = fd.facture_numero
                ) a_facturer";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql();
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->get('\Zac2\Domain\Afacturer', $filtre);
    }

    public function getArrayData($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->getArrayData($entity, $filtre);
    }

}
