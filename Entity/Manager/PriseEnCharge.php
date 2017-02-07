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

class PriseEnCharge extends DicAware implements ManagerInterface
{
    public function getEm($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT    p.*,
                          i.inscription_date,
                          i.centre_attachement_libelle,
                          iu.inscription_unite_date_creation,
                          iu.modalite,
                          iu.groupe_code,
                          iu.sousgroupe_code,
                          iu.inscription_unite_etat,
                          u.unite_code,
                          u.unite_nb_heure,
                          u.unite_ects,
                          uo.regroupement_programme_code,
                          uo.regroupement_programme_libelle,
                          i.formation_numero,
                          i.formation_libelle,
                          i.inscription_etat
                FROM      prise_en_charge_aqu p
                LEFT JOIN inscription_aqu i
                ON        i.centre_code     = 285
                AND       i.auditeur_numero = p.auditeur_numero
                AND       i.annee           = p.annee
                LEFT JOIN inscription_unite_aqu iu
                ON        iu.centre_code     = i.centre_code
                AND       iu.unite_numero    = p.unite_numero
                AND       iu.auditeur_numero = i.auditeur_numero
                AND       iu.annee           = i.annee
                AND       iu.semestre_code   = p.semestre_code
                LEFT JOIN unite_aqu u
                ON        u.unite_numero = iu.unite_numero
                LEFT JOIN unite_ouverte_aqu uo
                ON        uo.centre_code   = iu.centre_code
                AND       uo.annee         = iu.annee
                AND       uo.unite_numero  = iu.unite_numero
                AND       uo.semestre_code = iu.semestre_code
                AND       uo.groupe_code   = iu.groupe_code";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('p.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->get('\Zac2\Domain\PriseEnCharge', $filtre);
    }

    public function getArrayData($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->getArrayData($entity, $filtre);
    }

}
