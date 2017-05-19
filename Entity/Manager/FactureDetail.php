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

class FactureDetail extends DicAware implements ManagerInterface
{

    public function getEm($entity, Multi $filtre)
    {
        /** @var Manager $em */
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT    DISTINCT
                          f.facture_date,
                          f.regroupement_comptable_numero,
                          f.regroupement_comptable_libelle,
                          facture_detail_aqu.facture_detail_numero,
                          facture_detail_aqu.facture_numero,
                          facture_detail_aqu.annee,
                          facture_detail_aqu.annee_universitaire,
                          facture_detail_aqu.type_article,
                          facture_detail_aqu.type_facture,
                          facture_detail_aqu.article_numero,
                          facture_detail_aqu.article_libelle,
                          facture_detail_aqu.unite_numero,
                          facture_detail_aqu.unite_code,
                          facture_detail_aqu.unite_libelle,
                          facture_detail_aqu.semestre_code,
                          facture_detail_aqu.semestre_libelle,
                          facture_detail_aqu.modalite_numero,
                          facture_detail_aqu.modalite,
                          facture_detail_aqu.auditeur_numero,
                          facture_detail_aqu.auditeur_code,
                          facture_detail_aqu.auditeur_nom,
                          facture_detail_aqu.auditeur_prenom,
                          facture_detail_aqu.auditeur_nom_usage,
                          facture_detail_aqu.type_client,
                          facture_detail_aqu.entreprise_numero,
                          facture_detail_aqu.entreprise_nom,
                          facture_detail_aqu.cra_nom,
                          facture_detail_aqu.client_numero,
                          facture_detail_aqu.client_nom,
                          facture_detail_aqu.taux_tva,
                          facture_detail_aqu.detail_fac_prix_unitaire,
                          facture_detail_aqu.detail_fac_quantite,
                          facture_detail_aqu.facture_montant_total,
                          facture_detail_aqu.date_echeance,
                          c.centre_code,
                          c.centre_libelle,
                          u.regroupement_programme_code,
                          u.regroupement_programme_libelle,
                          financement.type_financement_code,
                          financement.type_financement_libelle,
                          i.centre_attachement_libelle,
                          i.formation_numero,
                          i.formation_libelle
                FROM      facture_detail_aqu
                JOIN      facture_aqu f
                ON        f.facture_numero = facture_detail_aqu.facture_numero
                JOIN      inscription_aqu i
                ON        i.centre_code     = facture_detail_aqu.centre_code
                AND       i.auditeur_numero = facture_detail_aqu.auditeur_numero
                AND       i.annee           = facture_detail_aqu.annee
                JOIN      centre_aqu c
                ON        c.centre_libelle = i.centre_attachement_libelle
                LEFT JOIN inscription_unite_aqu iu
                ON        iu.centre_code      = facture_detail_aqu.centre_code
                AND       iu.unite_numero     = facture_detail_aqu.unite_numero
                AND       iu.auditeur_numero  = facture_detail_aqu.auditeur_numero
                AND       iu.annee            = facture_detail_aqu.annee
                AND       iu.semestre_code    = facture_detail_aqu.semestre_code
                LEFT JOIN unite_ouverte_aqu u
                ON        u.semestre_code = facture_detail_aqu.semestre_code
                AND       u.unite_numero  = facture_detail_aqu.unite_numero
                AND       u.annee         = facture_detail_aqu.annee
                AND       u.centre_code   = facture_detail_aqu.centre_code
                AND       u.groupe_code   = iu.groupe_code
                LEFT JOIN type_tarif_aqu tta
                ON        (tta.type_tarif_code = iu.type_tarif_code OR tta.type_tarif_code = i.type_tarif_code)
                LEFT JOIN financement
                ON        financement.type_financement_code = tta.type_financement_code
        ";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql();
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    public function get($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->get('\Zac2\Domain\FactureDetail', $filtre);
    }

    public function getArrayData($entity, Multi $filtre)
    {
        return $this->getEm($entity, $filtre)->getArrayData($entity, $filtre);
    }

}
