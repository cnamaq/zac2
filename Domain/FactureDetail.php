<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Common\DateTime;
use Zac2\Entity\EntityAbstract;

class FactureDetail extends EntityAbstract
{
    /**
     * @var integer
     */
    protected $facture_detail_numero;
    /**
     * @var integer
     */
    protected $facture_numero;
    /**
     * @var integer
     */
    protected $annee;
    /**
     * @var string
     */
    protected $annee_universitaire;
    /**
     * @var string
     */
    protected $type_article;
    /**
     * @var string
     */
    protected $type_facture;
    /**
     * @var string
     */
    protected $centre_code;
    /**
     * @var string
     */
    protected $centre_libelle;
    /**
     * @var integer
     */
    protected $unite_numero;
    /**
     * @var string
     */
    protected $unite_code;
    /**
     * @var string
     */
    protected $unite_libelle;
    /**
     * @var integer
     */
    protected $semestre_code;
    /**
     * @var string
     */
    protected $semestre_libelle;
    /**
     * @var integer
     */
    protected $modalite_numero;
    /**
     * @var string
     */
    protected $modalite;
    /**
     * @var integer
     */
    protected $auditeur_numero;
    /**
     * @var string
     */
    protected $auditeur_code;
    /**
     * @var string
     */
    protected $auditeur_nom;
    /**
     * @var string
     *
     */
    protected $auditeur_prenom;
    /**
     * @var string
     */
    protected $auditeur_nom_usage;
    /**
     * @var string
     */
    protected $type_client;
    /**
     * @var integer
     */
    protected $entreprise_numero;
    /**
     * @var string
     */
    protected $entreprise_nom;
    /**
     * @var float
     */
    protected $taux_tva;
    /**
     * @var float
     */
    protected $detail_fac_prix_unitaire;
    /**
     * @var float
     */
    protected $detail_fac_quantite;
    /**
     * @var float
     */
    protected $facture_montant_total;
    /**
     * @var DateTime
     */
    protected $facture_date;

    /**
     * @return int
     */
    public function getFactureDetailNumero()
    {
        return $this->facture_detail_numero;
    }

    /**
     * @param int $facture_detail_numero
     */
    public function setFactureDetailNumero($facture_detail_numero)
    {
        $this->facture_detail_numero = $facture_detail_numero;
    }

    /**
     * @return int
     */
    public function getFactureNumero()
    {
        return $this->facture_numero;
    }

    /**
     * @param int $facture_numero
     */
    public function setFactureNumero($facture_numero)
    {
        $this->facture_numero = $facture_numero;
    }

    /**
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param int $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return string
     */
    public function getAnneeUniversitaire()
    {
        return $this->annee_universitaire;
    }

    /**
     * @param string $annee_universitaire
     */
    public function setAnneeUniversitaire($annee_universitaire)
    {
        $this->annee_universitaire = $annee_universitaire;
    }

    /**
     * @return string
     */
    public function getTypeArticle()
    {
        return $this->type_article;
    }

    /**
     * @param string $type_article
     */
    public function setTypeArticle($type_article)
    {
        $this->type_article = $type_article;
    }

    /**
     * @return string
     */
    public function getTypeFacture()
    {
        return $this->type_facture;
    }

    /**
     * @param string $type_facture
     */
    public function setTypeFacture($type_facture)
    {
        $this->type_facture = $type_facture;
    }

    /**
     * @return string
     */
    public function getCentreCode()
    {
        return $this->centre_code;
    }

    /**
     * @param string $centre_code
     */
    public function setCentreCode($centre_code)
    {
        $this->centre_code = $centre_code;
    }

    /**
     * @return string
     */
    public function getCentreLibelle()
    {
        return $this->centre_libelle;
    }

    /**
     * @param string $centre_libelle
     */
    public function setCentreLibelle($centre_libelle)
    {
        $this->centre_libelle = $centre_libelle;
    }

    /**
     * @return int
     */
    public function getUniteNumero()
    {
        return $this->unite_numero;
    }

    /**
     * @param int $unite_numero
     */
    public function setUniteNumero($unite_numero)
    {
        $this->unite_numero = $unite_numero;
    }

    /**
     * @return string
     */
    public function getUniteCode()
    {
        return $this->unite_code;
    }

    /**
     * @param string $unite_code
     */
    public function setUniteCode($unite_code)
    {
        $this->unite_code = $unite_code;
    }

    /**
     * @return string
     */
    public function getUniteLibelle()
    {
        return $this->unite_libelle;
    }

    /**
     * @param string $unite_libelle
     */
    public function setUniteLibelle($unite_libelle)
    {
        $this->unite_libelle = $unite_libelle;
    }

    /**
     * @return int
     */
    public function getSemestreCode()
    {
        return $this->semestre_code;
    }

    /**
     * @param int $semestre_code
     */
    public function setSemestreCode($semestre_code)
    {
        $this->semestre_code = $semestre_code;
    }

    /**
     * @return string
     */
    public function getSemestreLibelle()
    {
        return $this->semestre_libelle;
    }

    /**
     * @param string $semestre_libelle
     */
    public function setSemestreLibelle($semestre_libelle)
    {
        $this->semestre_libelle = $semestre_libelle;
    }

    /**
     * @return int
     */
    public function getModaliteNumero()
    {
        return $this->modalite_numero;
    }

    /**
     * @param int $modalite_numero
     */
    public function setModaliteNumero($modalite_numero)
    {
        $this->modalite_numero = $modalite_numero;
    }

    /**
     * @return string
     */
    public function getModalite()
    {
        return $this->modalite;
    }

    /**
     * @param string $modalite
     */
    public function setModalite($modalite)
    {
        $this->modalite = $modalite;
    }

    /**
     * @return int
     */
    public function getAuditeurNumero()
    {
        return $this->auditeur_numero;
    }

    /**
     * @param int $auditeur_numero
     */
    public function setAuditeurNumero($auditeur_numero)
    {
        $this->auditeur_numero = $auditeur_numero;
    }

    /**
     * @return string
     */
    public function getAuditeurCode()
    {
        return $this->auditeur_code;
    }

    /**
     * @param string $auditeur_code
     */
    public function setAuditeurCode($auditeur_code)
    {
        $this->auditeur_code = $auditeur_code;
    }

    /**
     * @return string
     */
    public function getAuditeurNom()
    {
        return $this->auditeur_nom;
    }

    /**
     * @param string $auditeur_nom
     */
    public function setAuditeurNom($auditeur_nom)
    {
        $this->auditeur_nom = $auditeur_nom;
    }

    /**
     * @return string
     */
    public function getAuditeurPrenom()
    {
        return $this->auditeur_prenom;
    }

    /**
     * @param string $auditeur_prenom
     */
    public function setAuditeurPrenom($auditeur_prenom)
    {
        $this->auditeur_prenom = $auditeur_prenom;
    }

    /**
     * @return string
     */
    public function getAuditeurNomUsage()
    {
        return $this->auditeur_nom_usage;
    }

    /**
     * @param string $auditeur_nom_usage
     */
    public function setAuditeurNomUsage($auditeur_nom_usage)
    {
        $this->auditeur_nom_usage = $auditeur_nom_usage;
    }

    /**
     * @return string
     */
    public function getTypeClient()
    {
        return $this->type_client;
    }

    /**
     * @param string $type_client
     */
    public function setTypeClient($type_client)
    {
        $this->type_client = $type_client;
    }

    /**
     * @return int
     */
    public function getEntrepriseNumero()
    {
        return $this->entreprise_numero;
    }

    /**
     * @param int $entreprise_numero
     */
    public function setEntrepriseNumero($entreprise_numero)
    {
        $this->entreprise_numero = $entreprise_numero;
    }

    /**
     * @return string
     */
    public function getEntrepriseNom()
    {
        return $this->entreprise_nom;
    }

    /**
     * @param string $entreprise_nom
     */
    public function setEntrepriseNom($entreprise_nom)
    {
        $this->entreprise_nom = $entreprise_nom;
    }

    /**
     * @return float
     */
    public function getTauxTva()
    {
        return $this->taux_tva;
    }

    /**
     * @param float $taux_tva
     */
    public function setTauxTva($taux_tva)
    {
        $this->taux_tva = $taux_tva;
    }

    /**
     * @return float
     */
    public function getDetailFacPrixUnitaire()
    {
        return $this->detail_fac_prix_unitaire;
    }

    /**
     * @param float $detail_fac_prix_unitaire
     */
    public function setDetailFacPrixUnitaire($detail_fac_prix_unitaire)
    {
        $this->detail_fac_prix_unitaire = $detail_fac_prix_unitaire;
    }

    /**
     * @return float
     */
    public function getDetailFacQuantite()
    {
        return $this->detail_fac_quantite;
    }

    /**
     * @param float $detail_fac_quantite
     */
    public function setDetailFacQuantite($detail_fac_quantite)
    {
        $this->detail_fac_quantite = $detail_fac_quantite;
    }

    /**
     * @return float
     */
    public function getFactureMontantTotal()
    {
        return $this->facture_montant_total;
    }

    /**
     * @param float $facture_montant_total
     */
    public function setFactureMontantTotal($facture_montant_total)
    {
        $this->facture_montant_total = $facture_montant_total;
    }

    /**
     * @return DateTime
     */
    public function getFactureDate()
    {
        return $this->facture_date;
    }

    /**
     * @param String $facture_date
     */
    public function setFactureDate($facture_date)
    {
        $this->facture_date = new DateTime($facture_date);
    }
    
}
