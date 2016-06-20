<?php

namespace Zac2\Domain;


use Doctrine\ORM\EntityManager;
use Zac2\Analytique\LigneInterface;
use Zac2\Common\DateTime;
use Zac2\Entity\EntityAbstract;

class PriseEnCharge extends EntityAbstract implements LigneInterface
{
    /**
     * @var EntityManager
     */
    protected $em;
    /**
     * @var integer
     */
    protected $prise_en_charge_numero;
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
     * @var float
     */
    protected $article_montant;
    /**
     * @var string
     */
    protected $type_financement;
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
    protected $unite_libelle;
    /**
     * @var string
     */
    protected $semestre_code;
    /**
     * @var string
     */
    protected $semestre_libelle;
    /**
     * @var integer
     */
    protected $auditeur_numero;
    /**
     * @var integer
     */
    protected $auditeur_code;
    /**
     * @var string
     */
    protected $auditeur_nom;
    /**
     * @var string
     */
    protected $auditeur_nom_usage;
    /**
     * @var string
     */
    protected $auditeur_prenom;
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
     * @var string
     */
    protected $type_entreprise;
    /**
     * @var float
     */
    protected $montant;
    /**
     * @var string
     */
    protected $pourcentage;
    /**
     * @var float
     */
    protected $nombre_heure;
    /**
     * @var float
     */
    protected $montant_heure;
    /**
     * @var string
     */
    protected $type_financeur;
    /**
     * @var string
     */
    protected $memo;
    /**
     * @var string
     */
    protected $cra_nom;
    /**
     * @var string
     */
    protected $modalite;
    /**
     * @var DateTime
     */
    protected $inscription_date;
    /**
     * @var DateTime
     */
    protected $inscription_unite_date_creation;
    /**
     * @var string
     */
    protected $unite_code;
    /**
     * @var float
     */
    protected $unite_nb_heure;
    /**
     * @var integer
     */
    protected $unite_ects;
    /**
     * @var string
     */
    protected $centre_attachement_libelle;
    /**
     * @var string
     */
    protected $regroupement_programme_code;
    /**
     * @var string
     */
    protected $regroupement_programme_libelle;

    /**
     * @return string
     */
    public function getRegroupementProgrammeCode()
    {
        return $this->regroupement_programme_code;
    }

    /**
     * @param string $regroupement_programme_code
     */
    public function setRegroupementProgrammeCode($regroupement_programme_code)
    {
        $this->regroupement_programme_code = $regroupement_programme_code;
    }

    /**
     * @return string
     */
    public function getRegroupementProgrammeLibelle()
    {
        return $this->regroupement_programme_libelle;
    }

    /**
     * @param string $regroupement_programme_libelle
     */
    public function setRegroupementProgrammeLibelle($regroupement_programme_libelle)
    {
        $this->regroupement_programme_libelle = $regroupement_programme_libelle;
    }

    /**
     * @return string
     */
    public function getCentreAttachementLibelle()
    {
        return $this->centre_attachement_libelle;
    }

    /**
     * @param string $centre_attachement_libelle
     */
    public function setCentreAttachementLibelle($centre_attachement_libelle)
    {
        $this->centre_attachement_libelle = $centre_attachement_libelle;
    }

    /**
     * @return int
     */
    public function getUniteEcts()
    {
        return $this->unite_ects;
    }

    /**
     * @param int $unite_ects
     */
    public function setUniteEcts($unite_ects)
    {
        $this->unite_ects = $unite_ects;
    }

    /**
     * @return string
     */
    public function getTypeFinanceur()
    {
        return $this->type_financeur;
    }

    /**
     * @param string $type_financeur
     */
    public function setTypeFinanceur($type_financeur)
    {
        $this->type_financeur = $type_financeur;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function getCraNom()
    {
        return $this->cra_nom;
    }

    /**
     * @param string $cra_nom
     */
    public function setCraNom($cra_nom)
    {
        $this->cra_nom = $cra_nom;
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
     * @return float
     */
    public function getNombreHeure()
    {
        return $this->nombre_heure;
    }

    /**
     * @param float $nombre_heure
     */
    public function setNombreHeure($nombre_heure)
    {
        $this->nombre_heure = $nombre_heure;
    }

    /**
     * @return float
     */
    public function getMontantHeure()
    {
        return $this->montant_heure;
    }

    /**
     * @param float $montant_heure
     */
    public function setMontantHeure($montant_heure)
    {
        $this->montant_heure = $montant_heure;
    }

    /**
     * @return int
     */
    public function getPriseEnChargeNumero()
    {
        return $this->prise_en_charge_numero;
    }

    /**
     * @param int $prise_en_charge_numero
     */
    public function setPriseEnChargeNumero($prise_en_charge_numero)
    {
        $this->prise_en_charge_numero = $prise_en_charge_numero;
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
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
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
     * @return float
     */
    public function getArticleMontant()
    {
        return $this->article_montant;
    }

    /**
     * @param float $article_montant
     */
    public function setArticleMontant($article_montant)
    {
        $this->article_montant = $article_montant;
    }

    /**
     * @return string
     */
    public function getTypeFinancement()
    {
        return $this->type_financement;
    }

    /**
     * @param string $type_financement
     */
    public function setTypeFinancement($type_financement)
    {
        $this->type_financement = $type_financement;
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
     * @return int
     */
    public function getAuditeurCode()
    {
        return $this->auditeur_code;
    }

    /**
     * @param int $auditeur_code
     */
    public function setAuditeurCode($auditeur_code)
    {
        $this->auditeur_code = $auditeur_code;
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
     * @return string
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * @param string $pourcentage
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }

    /**
     * @return string
     */
    public function getSemestreCode()
    {
        return $this->semestre_code;
    }

    /**
     * @param string $semestre_code
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
     * @return string
     */
    public function getTypeEntreprise()
    {
        return $this->type_entreprise;
    }

    /**
     * @param string $type_entreprise
     */
    public function setTypeEntreprise($type_entreprise)
    {
        $this->type_entreprise = $type_entreprise;
    }

    /**
     * @return DateTime
     */
    public function getInscriptionDate()
    {
        return $this->inscription_date;
    }

    /**
     * @param string $inscription_date
     */
    public function setInscriptionDate($inscription_date)
    {
        $this->inscription_date = new DateTime($inscription_date);
    }

    /**
     * @return DateTime
     */
    public function getInscriptionUniteDateCreation()
    {
        return $this->inscription_unite_date_creation;
    }

    /**
     * @param string $inscription_unite_date_creation
     */
    public function setInscriptionUniteDateCreation($inscription_unite_date_creation)
    {
        $this->inscription_unite_date_creation = new DateTime($inscription_unite_date_creation);
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public function getDateFin()
    {
        if (is_null($this->getUniteNumero())) {
            return new \DateTime(($this->getAnnee() + 1) . '-08-31');
        }
        if (preg_match('/^UA|^VAE|^VES|^VAP/i', $this->getUniteNumero())) {
            $dateFin = clone($this->getDateInscription());
            return $dateFin->modify('+ 1 year');
        } else {
            switch ($this->getSemestreCode()) {
                case '1' :
                    return new \DateTime(($this->getAnnee() + 1) . '-02-28 23:59');
                case '2' :
                    return new \DateTime(($this->getAnnee() + 1) . '-06-30 23:59');
                case '3' :
                    return new \DateTime(($this->getAnnee() + 1) . '-06-30 23:59');
                default :
                    throw new \Exception('code semestre inconnu : ' . $this->getSemestreCode());
            }
        }
    }

    /**
     * @return DateTime
     * @throws \Exception
     */
    public function getDateDebut()
    {
        if (is_null($this->getUniteNumero())) {
            return new \DateTime($this->getAnnee() . '-09-01');
        }
        if (preg_match('/^UA|^VAE|^VES|^VAP/i', $this->getUniteCode())) {
            return $this->getDateInscription();
        } else {
            switch ($this->getSemestreCode()) {
                case '1' :
                    return new DateTime($this->getAnnee() . '-10-01 00:01');
                case '2' :
                    return new DateTime(($this->getAnnee() + 1) . '-02-01 00:01');
                case '3' :
                    return new DateTime($this->getAnnee() . '-10-01 00:01');
                default :
                    throw new \Exception('code semestre inconnu : ' . $this->getSemestreCode());
            }
        }
    }

    /**
     * @return DateTime
     */
    public function getDateInscription()
    {
        return ($this->getInscriptionUniteDateCreation()) ? $this->getInscriptionUniteDateCreation() : $this->getInscriptionDate();
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
     * @return float
     */
    public function getUniteNbHeure()
    {
        return $this->unite_nb_heure;
    }

    /**
     * @param float $unite_nb_heure
     */
    public function setUniteNbHeure($unite_nb_heure)
    {
        $this->unite_nb_heure = $unite_nb_heure;
    }

    /**
     * @return EntityManager
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param EntityManager $em
     */
    public function setEm(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param $annee
     * @return null|FaePca
     */
    protected function getFaePca($annee)
    {
        $lst = $this->getEm()->getRepository('Zac2\Domain\FaePca')->findBy(array(
            'priseEnChargeNumero' => $this->getPriseEnChargeNumero(),
            'anneeCivile' => $annee,
        ));

        return (isset($lst[0])) ? $lst[0] : null;
    }


    /**
     * @param integer $annee
     * @return float|null
     */
    public function getFae($annee)
    {
        return (!is_null($this->getFaePca($annee))) ? $this->getFaePca($annee)->getFae() : 0;
    }

    /**
     * @param integer $annee
     * @return float|null
     */
    public function getPca($annee)
    {
        return (!is_null($this->getFaePca($annee))) ? $this->getFaePca($annee)->getPca() : 0;
    }

    /**
     * @param integer $annee
     * @return float|int
     */
    public function getCaCalcule($annee)
    {
        return (!is_null($this->getFaePca($annee))) ? $this->getFaePca($annee)->getCaCalcule() : 0;
    }

    /**
     * @return string
     */
    function getCodeForSiteAnalytique()
    {
        return $this->getCentreAttachementLibelle();
    }

    /**
     * @return string
     */
    function getCodeForComposanteAnalytique()
    {
        return $this->getRegroupementProgrammeLibelle();
    }

    /**
     * @return string
     */
    function getCodeForModaliteAnalytique()
    {
        return $this->getModalite();
    }

    /**
     * @return null
     */
    function getCodeForProjetAnalytique()
    {
        return null;
    }

}
