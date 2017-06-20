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

class FormationUniteOuverte extends DicAware
{

    public function getEm()
    {
        /** @var Manager $em */
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT    fuo.*,
                          fp.formation_code,
                          uo.compte_analytique_actif,
                          uo.compte_analytique_libelle_court,
                          uo.compte_analytique_libelle
                FROM      formation_unite_ouverte_aqu fuo
                LEFT JOIN formation_proposee_aqu fp
                ON        fuo.formation_proposee_code = fp.formation_proposee_code
                AND       fuo.annee_formation = fp.annee_formation
                LEFT JOIN unite_ouverte_aqu  uo
                ON uo.centre_code = fuo.centre_code
                AND uo.annee_universitaire = fuo.annee_universitaire
                AND uo.unite_numero = fuo.unite_numero
                AND uo.groupe_code = fuo.groupe_code
                AND uo.semestre_code = fuo.semestre_code
        ";
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get()
    {
        return $this->getEm()->get('\Zac2\Domain\FormationUniteOuverte');
    }

    public function getArrayData()
    {
        return $this->getEm()->getArrayData('\Zac2\Domain\FormationUniteOuverte');
    }

}
