<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;

use Zac2\Entity\EntityAbstract;

class Auditeur extends EntityAbstract
{
    protected $auditeur_numero;
    protected $auditeur_connu_cnam;
    protected $auditeur_titre;
    protected $auditeur_sexe;
    protected $auditeur_nationalite;
    protected $entreprise_numero;
    protected $entreprise_nom;
    protected $auditeur_ancien_code;
    protected $auditeur_code;
    protected $auditeur_prenom;
    protected $auditeur_nom_usage;
    protected $auditeur_date_naissance;
    protected $auditeur_departement_naissance;
    protected $auditeur_ville_naissance;
    protected $auditeur_lieu_naissance;
    protected $auditeur_adresse_zone1;
    protected $auditeur_code_postal;
    protected $auditeur_ville;
    protected $auditeur_pays;
    protected $auditeur_adresse_valide;
    protected $auditeur_telephone_pro;
    protected $auditeur_mel_pers;
    protected $auditeur_mel_pers_valide;
    protected $auditeur_mel_pro_valide;
    protected $auditeur_profession;
    protected $auditeur_login_pleiad;
    protected $auditeur_mel_pleiad;
    protected $auditeur_actif;
    protected $auditeur_plus_haut_diplome_initial;
    protected $auditeur_niveau_plus_haut_diplome_initial;
    protected $auditeur_annee_plus_haut_diplome_initial;
    protected $auditeur_specialite_plus_haut_diplome_initial;
    protected $centre_attachement_plus_recent_libelle;
    protected $auditeur_autorisation_sms;
    protected $auditeur_identifiant_pleiad;
    protected $auditeur_experience_professionnelle;
    protected $auditeur_nom;
    protected $auditeur_adresse_zone2;
    protected $auditeur_telephone_port;
    protected $auditeur_memo;
    protected $auditeur_ine_cnam;
    protected $auditeur_telephone_pers;

    /**
     * @return mixed
     */
    public function getAuditeurMemo()
    {
        return $this->auditeur_memo;
    }

    /**
     * @param mixed $auditeur_memo
     */
    public function setAuditeurMemo($auditeur_memo)
    {
        $this->auditeur_memo = $auditeur_memo;
    }

    /**
     * @return mixed
     */
    public function getAuditeurIneCnam()
    {
        return $this->auditeur_ine_cnam;
    }

    /**
     * @param mixed $auditeur_ine_cnam
     */
    public function setAuditeurIneCnam($auditeur_ine_cnam)
    {
        $this->auditeur_ine_cnam = $auditeur_ine_cnam;
    }

    /**
     * @return mixed
     */
    public function getAuditeurTelephonePers()
    {
        return $this->auditeur_telephone_pers;
    }

    /**
     * @param mixed $auditeur_telephone_pers
     */
    public function setAuditeurTelephonePers($auditeur_telephone_pers)
    {
        $this->auditeur_telephone_pers = $auditeur_telephone_pers;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNumero()
    {
        return $this->auditeur_numero;
    }

    /**
     * @param mixed $auditeur_numero
     */
    public function setAuditeurNumero($auditeur_numero)
    {
        $this->auditeur_numero = $auditeur_numero;
    }

    /**
     * @return mixed
     */
    public function getAuditeurConnuCnam()
    {
        return $this->auditeur_connu_cnam;
    }

    /**
     * @param mixed $auditeur_connu_cnam
     */
    public function setAuditeurConnuCnam($auditeur_connu_cnam)
    {
        $this->auditeur_connu_cnam = $auditeur_connu_cnam;
    }

    /**
     * @return mixed
     */
    public function getAuditeurTitre()
    {
        return $this->auditeur_titre;
    }

    /**
     * @param mixed $auditeur_titre
     */
    public function setAuditeurTitre($auditeur_titre)
    {
        $this->auditeur_titre = $auditeur_titre;
    }

    /**
     * @return mixed
     */
    public function getAuditeurSexe()
    {
        return $this->auditeur_sexe;
    }

    /**
     * @param mixed $auditeur_sexe
     */
    public function setAuditeurSexe($auditeur_sexe)
    {
        $this->auditeur_sexe = $auditeur_sexe;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNationalite()
    {
        return $this->auditeur_nationalite;
    }

    /**
     * @param mixed $auditeur_nationalite
     */
    public function setAuditeurNationalite($auditeur_nationalite)
    {
        $this->auditeur_nationalite = $auditeur_nationalite;
    }

    /**
     * @return mixed
     */
    public function getEntrepriseNumero()
    {
        return $this->entreprise_numero;
    }

    /**
     * @param mixed $entreprise_numero
     */
    public function setEntrepriseNumero($entreprise_numero)
    {
        $this->entreprise_numero = $entreprise_numero;
    }

    /**
     * @return mixed
     */
    public function getEntrepriseNom()
    {
        return $this->entreprise_nom;
    }

    /**
     * @param mixed $entreprise_nom
     */
    public function setEntrepriseNom($entreprise_nom)
    {
        $this->entreprise_nom = $entreprise_nom;
    }

    /**
     * @return mixed
     */
    public function getAuditeurAncienCode()
    {
        return $this->auditeur_ancien_code;
    }

    /**
     * @param mixed $auditeur_ancien_code
     */
    public function setAuditeurAncienCode($auditeur_ancien_code)
    {
        $this->auditeur_ancien_code = $auditeur_ancien_code;
    }

    /**
     * @return mixed
     */
    public function getAuditeurCode()
    {
        return $this->auditeur_code;
    }

    /**
     * @param mixed $auditeur_code
     */
    public function setAuditeurCode($auditeur_code)
    {
        $this->auditeur_code = $auditeur_code;
    }

    /**
     * @return mixed
     */
    public function getAuditeurPrenom()
    {
        return $this->auditeur_prenom;
    }

    /**
     * @param mixed $auditeur_prenom
     */
    public function setAuditeurPrenom($auditeur_prenom)
    {
        $this->auditeur_prenom = $auditeur_prenom;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNomUsage()
    {
        return $this->auditeur_nom_usage;
    }

    /**
     * @param mixed $auditeur_nom_usage
     */
    public function setAuditeurNomUsage($auditeur_nom_usage)
    {
        $this->auditeur_nom_usage = $auditeur_nom_usage;
    }

    /**
     * @return mixed
     */
    public function getAuditeurDateNaissance()
    {
        return $this->auditeur_date_naissance;
    }

    /**
     * @param mixed $auditeur_date_naissance
     */
    public function setAuditeurDateNaissance($auditeur_date_naissance)
    {
        $this->auditeur_date_naissance = $auditeur_date_naissance;
    }

    /**
     * @return mixed
     */
    public function getAuditeurDepartementNaissance()
    {
        return $this->auditeur_departement_naissance;
    }

    /**
     * @param mixed $auditeur_departement_naissance
     */
    public function setAuditeurDepartementNaissance($auditeur_departement_naissance)
    {
        $this->auditeur_departement_naissance = $auditeur_departement_naissance;
    }

    /**
     * @return mixed
     */
    public function getAuditeurVilleNaissance()
    {
        return $this->auditeur_ville_naissance;
    }

    /**
     * @param mixed $auditeur_ville_naissance
     */
    public function setAuditeurVilleNaissance($auditeur_ville_naissance)
    {
        $this->auditeur_ville_naissance = $auditeur_ville_naissance;
    }

    /**
     * @return mixed
     */
    public function getAuditeurLieuNaissance()
    {
        return $this->auditeur_lieu_naissance;
    }

    /**
     * @param mixed $auditeur_lieu_naissance
     */
    public function setAuditeurLieuNaissance($auditeur_lieu_naissance)
    {
        $this->auditeur_lieu_naissance = $auditeur_lieu_naissance;
    }

    /**
     * @return mixed
     */
    public function getAuditeurAdresseZone1()
    {
        return $this->auditeur_adresse_zone1;
    }

    /**
     * @param mixed $auditeur_adresse_zone1
     */
    public function setAuditeurAdresseZone1($auditeur_adresse_zone1)
    {
        $this->auditeur_adresse_zone1 = $auditeur_adresse_zone1;
    }

    /**
     * @return mixed
     */
    public function getAuditeurCodePostal()
    {
        return $this->auditeur_code_postal;
    }

    /**
     * @param mixed $auditeur_code_postal
     */
    public function setAuditeurCodePostal($auditeur_code_postal)
    {
        $this->auditeur_code_postal = $auditeur_code_postal;
    }

    /**
     * @return mixed
     */
    public function getAuditeurVille()
    {
        return $this->auditeur_ville;
    }

    /**
     * @param mixed $auditeur_ville
     */
    public function setAuditeurVille($auditeur_ville)
    {
        $this->auditeur_ville = $auditeur_ville;
    }

    /**
     * @return mixed
     */
    public function getAuditeurPays()
    {
        return $this->auditeur_pays;
    }

    /**
     * @param mixed $auditeur_pays
     */
    public function setAuditeurPays($auditeur_pays)
    {
        $this->auditeur_pays = $auditeur_pays;
    }

    /**
     * @return mixed
     */
    public function getAuditeurAdresseValide()
    {
        return $this->auditeur_adresse_valide;
    }

    /**
     * @param mixed $auditeur_adresse_valide
     */
    public function setAuditeurAdresseValide($auditeur_adresse_valide)
    {
        $this->auditeur_adresse_valide = $auditeur_adresse_valide;
    }

    /**
     * @return mixed
     */
    public function getAuditeurTelephonePro()
    {
        return $this->auditeur_telephone_pro;
    }

    /**
     * @param mixed $auditeur_telephone_pro
     */
    public function setAuditeurTelephonePro($auditeur_telephone_pro)
    {
        $this->auditeur_telephone_pro = $auditeur_telephone_pro;
    }

    /**
     * @return mixed
     */
    public function getAuditeurMelPers()
    {
        return $this->auditeur_mel_pers;
    }

    /**
     * @param mixed $auditeur_mel_pers
     */
    public function setAuditeurMelPers($auditeur_mel_pers)
    {
        $this->auditeur_mel_pers = $auditeur_mel_pers;
    }

    /**
     * @return mixed
     */
    public function getAuditeurMelPersValide()
    {
        return $this->auditeur_mel_pers_valide;
    }

    /**
     * @param mixed $auditeur_mel_pers_valide
     */
    public function setAuditeurMelPersValide($auditeur_mel_pers_valide)
    {
        $this->auditeur_mel_pers_valide = $auditeur_mel_pers_valide;
    }

    /**
     * @return mixed
     */
    public function getAuditeurMelProValide()
    {
        return $this->auditeur_mel_pro_valide;
    }

    /**
     * @param mixed $auditeur_mel_pro_valide
     */
    public function setAuditeurMelProValide($auditeur_mel_pro_valide)
    {
        $this->auditeur_mel_pro_valide = $auditeur_mel_pro_valide;
    }

    /**
     * @return mixed
     */
    public function getAuditeurProfession()
    {
        return $this->auditeur_profession;
    }

    /**
     * @param mixed $auditeur_profession
     */
    public function setAuditeurProfession($auditeur_profession)
    {
        $this->auditeur_profession = $auditeur_profession;
    }

    /**
     * @return mixed
     */
    public function getAuditeurLoginPleiad()
    {
        return $this->auditeur_login_pleiad;
    }

    /**
     * @param mixed $auditeur_login_pleiad
     */
    public function setAuditeurLoginPleiad($auditeur_login_pleiad)
    {
        $this->auditeur_login_pleiad = $auditeur_login_pleiad;
    }

    /**
     * @return mixed
     */
    public function getAuditeurMelPleiad()
    {
        return $this->auditeur_mel_pleiad;
    }

    /**
     * @param mixed $auditeur_mel_pleiad
     */
    public function setAuditeurMelPleiad($auditeur_mel_pleiad)
    {
        $this->auditeur_mel_pleiad = $auditeur_mel_pleiad;
    }

    /**
     * @return mixed
     */
    public function getAuditeurActif()
    {
        return $this->auditeur_actif;
    }

    /**
     * @param mixed $auditeur_actif
     */
    public function setAuditeurActif($auditeur_actif)
    {
        $this->auditeur_actif = $auditeur_actif;
    }

    /**
     * @return mixed
     */
    public function getAuditeurPlusHautDiplomeInitial()
    {
        return $this->auditeur_plus_haut_diplome_initial;
    }

    /**
     * @param mixed $auditeur_plus_haut_diplome_initial
     */
    public function setAuditeurPlusHautDiplomeInitial($auditeur_plus_haut_diplome_initial)
    {
        $this->auditeur_plus_haut_diplome_initial = $auditeur_plus_haut_diplome_initial;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNiveauPlusHautDiplomeInitial()
    {
        return $this->auditeur_niveau_plus_haut_diplome_initial;
    }

    /**
     * @param mixed $auditeur_niveau_plus_haut_diplome_initial
     */
    public function setAuditeurNiveauPlusHautDiplomeInitial($auditeur_niveau_plus_haut_diplome_initial)
    {
        $this->auditeur_niveau_plus_haut_diplome_initial = $auditeur_niveau_plus_haut_diplome_initial;
    }

    /**
     * @return mixed
     */
    public function getAuditeurAnneePlusHautDiplomeInitial()
    {
        return $this->auditeur_annee_plus_haut_diplome_initial;
    }

    /**
     * @param mixed $auditeur_annee_plus_haut_diplome_initial
     */
    public function setAuditeurAnneePlusHautDiplomeInitial($auditeur_annee_plus_haut_diplome_initial)
    {
        $this->auditeur_annee_plus_haut_diplome_initial = $auditeur_annee_plus_haut_diplome_initial;
    }

    /**
     * @return mixed
     */
    public function getAuditeurSpecialitePlusHautDiplomeInitial()
    {
        return $this->auditeur_specialite_plus_haut_diplome_initial;
    }

    /**
     * @param mixed $auditeur_specialite_plus_haut_diplome_initial
     */
    public function setAuditeurSpecialitePlusHautDiplomeInitial($auditeur_specialite_plus_haut_diplome_initial)
    {
        $this->auditeur_specialite_plus_haut_diplome_initial = $auditeur_specialite_plus_haut_diplome_initial;
    }

    /**
     * @return mixed
     */
    public function getCentreAttachementPlusRecentLibelle()
    {
        return $this->centre_attachement_plus_recent_libelle;
    }

    /**
     * @param mixed $centre_attachement_plus_recent_libelle
     */
    public function setCentreAttachementPlusRecentLibelle($centre_attachement_plus_recent_libelle)
    {
        $this->centre_attachement_plus_recent_libelle = $centre_attachement_plus_recent_libelle;
    }

    /**
     * @return mixed
     */
    public function getAuditeurAutorisationSms()
    {
        return $this->auditeur_autorisation_sms;
    }

    /**
     * @param mixed $auditeur_autorisation_sms
     */
    public function setAuditeurAutorisationSms($auditeur_autorisation_sms)
    {
        $this->auditeur_autorisation_sms = $auditeur_autorisation_sms;
    }

    /**
     * @return mixed
     */
    public function getAuditeurIdentifiantPleiad()
    {
        return $this->auditeur_identifiant_pleiad;
    }

    /**
     * @param mixed $auditeur_identifiant_pleiad
     */
    public function setAuditeurIdentifiantPleiad($auditeur_identifiant_pleiad)
    {
        $this->auditeur_identifiant_pleiad = $auditeur_identifiant_pleiad;
    }

    /**
     * @return mixed
     */
    public function getAuditeurExperienceProfessionnelle()
    {
        return $this->auditeur_experience_professionnelle;
    }

    /**
     * @param mixed $auditeur_experience_professionnelle
     */
    public function setAuditeurExperienceProfessionnelle($auditeur_experience_professionnelle)
    {
        $this->auditeur_experience_professionnelle = $auditeur_experience_professionnelle;
    }

    /**
     * @return mixed
     */
    public function getAuditeurNom()
    {
        return $this->auditeur_nom;
    }

    /**
     * @param mixed $auditeur_nom
     */
    public function setAuditeurNom($auditeur_nom)
    {
        $this->auditeur_nom = $auditeur_nom;
    }

    /**
     * @return mixed
     */
    public function getAuditeurAdresseZone2()
    {
        return $this->auditeur_adresse_zone2;
    }

    /**
     * @param mixed $auditeur_adresse_zone2
     */
    public function setAuditeurAdresseZone2($auditeur_adresse_zone2)
    {
        $this->auditeur_adresse_zone2 = $auditeur_adresse_zone2;
    }

    /**
     * @return mixed
     */
    public function getAuditeurTelephonePort()
    {
        return $this->auditeur_telephone_port;
    }

    /**
     * @param mixed $auditeur_telephone_port
     */
    public function setAuditeurTelephonePort($auditeur_telephone_port)
    {
        $this->auditeur_telephone_port = $auditeur_telephone_port;
    }

}
