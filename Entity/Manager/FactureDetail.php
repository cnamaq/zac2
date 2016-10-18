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

class FactureDetail extends DicAware implements ManagerInterface
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
        $sql = "SELECT facture_detail_aqu.*, u.regroupement_programme_code, u.regroupement_programme_libelle 
                FROM facture_detail_aqu 
                LEFT JOIN unite_ouverte_aqu as u 
                ON u.semestre_code=facture_detail_aqu.semestre_code 
                AND u.unite_numero=facture_detail_aqu.unite_numero 
                AND u.annee = facture_detail_aqu.annee 
                AND u.centre_code = facture_detail_aqu.centre_code";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql();
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        $result = $em->get('\Zac2\Domain\\' . ucfirst($entity), $filtre);
        $lignes = [];
        /** @var \Zac2\Domain\FactureDetail $row */
        foreach ($result as $row) {
            $lignes[$row->getAnnee().$row->getCentreCode().$row->getUniteNumero().$row->getSemestreCode()] = $row;
        }

        return $lignes;
    }

}
