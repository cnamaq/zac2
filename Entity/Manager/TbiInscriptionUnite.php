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
        $sql = "SELECT    i.*, a.*, insc.*, uo.*, u.*, d.*
                FROM      inscription_unite_aqu AS i
                JOIN      inscription_aqu AS insc
                ON        insc.annee            = i.annee
                AND       insc.auditeur_numero  = i.auditeur_numero
                AND       insc.inscription_etat = 'Validée'
                JOIN      auditeur_aqu AS a
                ON        a.auditeur_numero = insc.auditeur_numero
                JOIN      unite_ouverte_aqu AS uo
                ON        uo.annee                = i.annee
                AND       uo.unite_numero         = i.unite_numero
                AND       uo.groupe_code          = i.groupe_code
                AND       uo.semestre_code        = i.semestre_code
                AND       uo.etat_ouverture_code != 'NO'
                JOIN      unite_aqu AS u
                ON        u.unite_numero = uo.unite_numero
                LEFT JOIN diplome_cnam_aqu AS d
                ON        d.diplome_numero = insc.inscription_diplome_prepare_numero
                WHERE     i.inscription_unite_etat = 'Validée'";
        if ($filtre->getSql()) {
            $sql .= ' AND ' . $filtre->getSql('i.');
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
