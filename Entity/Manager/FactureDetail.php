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
        $sql = "SELECT    i.centre_attachement_libelle AS centre_libelle,
                          fd.facture_detail_numero,
                          fd.facture_numero,
                          fd.annee,
                          fd.annee_universitaire,
                          fd.type_article,
                          fd.type_facture,
                          fd.article_numero,
                          fd.article_libelle,
                          fd.unite_numero,
                          fd.unite_code,
                          fd.unite_libelle,
                          fd.semestre_code,
                          fd.semestre_libelle,
                          fd.modalite_numero,
                          fd.modalite,
                          fd.auditeur_numero,
                          fd.auditeur_code,
                          fd.auditeur_nom,
                          fd.auditeur_prenom,
                          fd.auditeur_nom_usage,
                          fd.type_client,
                          fd.entreprise_numero,
                          fd.entreprise_nom,
                          fd.cra_nom,
                          fd.client_numero,
                          fd.client_nom,
                          fd.taux_tva,
                          fd.detail_fac_prix_unitaire,
                          fd.detail_fac_quantite,
                          fd.facture_montant_total,
                          fd.date_echeance,
                          u.regroupement_programme_code,
                          u.regroupement_programme_libelle
                FROM      facture_detail_aqu fd
                JOIN      inscription_aqu i
                ON        i.centre_code     = fd.centre_code
                AND       i.auditeur_numero = fd.auditeur_numero
                AND       i.annee           = fd.annee
                LEFT JOIN unite_ouverte_aqu u
                ON        u.semestre_code = fd.semestre_code
                AND       u.unite_numero  = fd.unite_numero
                AND       u.annee         = fd.annee
                AND       u.centre_code   = fd.centre_code";
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
