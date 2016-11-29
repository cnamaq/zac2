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

class InscriptionUnite extends DicAware implements ManagerInterface
{

    public function getEm($entity, Multi $filtre)
    {
        /** @var Manager $em */
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT    iu.*,
                          u.unite_nb_heure,
                          u.unite_ects
                FROM      inscription_unite_aqu iu
                LEFT JOIN unite_aqu u
                ON        u.unite_numero = iu.unite_numero";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('p.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->get('\Zac2\Domain\InscriptionUnite', $filtre);
    }

    public function getArrayData($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->getArrayData($entity, $filtre);
    }

}
