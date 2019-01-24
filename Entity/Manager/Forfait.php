<?php

namespace Zac2\Entity\Manager;


use Zac2\Common\DicAware;
use Zac2\Data\Request\SqlString;
use Zac2\Filter\Multi\Multi;

class Forfait extends DicAware implements ManagerInterface
{

    protected function getEm($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT f.*, 
                uo.compte_analytique_actif,
                uo.compte_analytique_libelle_court,
                uo.compte_analytique_libelle
            FROM remuneration_forfaitaire_aqu as f
            LEFT JOIN unite_ouverte_aqu as uo ON uo.centre_code = f.centre_code 
                AND uo.annee = f.annee 
                AND uo.unite_numero = f.unite_numero
                AND uo.semestre_code = f.semestre_code
                AND uo.groupe_code = f.groupe_code";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('f.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->get('\Zac2\Domain\Forfait', $filtre);
    }

    public function getArrayData($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->getArrayData($entity, $filtre);
    }

}
