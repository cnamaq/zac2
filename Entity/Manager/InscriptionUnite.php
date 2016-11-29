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
        $sql = "SELECT    *
                FROM      (
                    SELECT    iu.*,
                              u.unite_nb_heure,
                              uo.regroupement_programme_code,
                              uo.regroupement_programme_libelle
                    FROM      inscription_unite_aqu iu
                    JOIN      unite_aqu u
                    ON        u.unite_numero = iu.unite_numero
                    LEFT JOIN unite_ouverte_aqu uo
                    ON        uo.centre_code = iu.centre_code
                    AND       uo.annee = iu.annee
                    AND       uo.semestre_code = iu.semestre_code
                    AND       uo.unite_numero = iu.unite_numero
                    AND       uo.groupe_code = iu.groupe_code
                ) inscriptions";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('inscriptions.');
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
