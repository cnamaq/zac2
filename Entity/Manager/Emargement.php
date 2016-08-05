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

class Emargement extends DicAware implements ManagerInterface
{
    public function get($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        $dataRequest->setSql("SELECT e.*, 
                uo.regroupement_programme_code, uo.regroupement_programme_libelle
            FROM emargement_aqu as e
            LEFT JOIN unite_ouverte_aqu as uo ON uo.centre_code = e.centre_code 
                AND uo.annee = e.annee 
                AND uo.unite_numero = e.unite_numero
                AND uo.semestre_code = e.semestre_code
                AND uo.groupe_code = e.groupe_code");
        $em->setDataRequestAdapter($dataRequest);

        return $em->get('\Zac2\Domain\Emargement', $filtre);
    }

}
