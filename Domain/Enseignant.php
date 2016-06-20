<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class Enseignant extends EntityAbstract
{
    /**
     * @var int
     */
    protected $enseignant_code;
    /**
     * @var string
     */
    protected $enseignant_nom;
    /**
     * @var string
     */
    protected $enseignant_nom_usage;
    /**
     * @var string
     */
    protected $enseignant_prenom;
    /**
     * @var string
     */
    protected $enseignant_sexe;
    /**
     * @var string
     */
    protected $enseignant_civilite;
    /**
     * @var string
     */
    protected $enseignant_profil;
    /**
     * @var string
     */
    protected $enseignant_categorie;
    /**
     * @var string
     */
    protected $enseignant_situation_famille;
    /**
     * @var string
     */
    protected $enseignant_numero_secu;
    /**
     * @var string
     */
    protected $enseignant_date_naissance;
    /**
     * @var string
     */
    protected $enseignant_lieu_naissance;
    /**
     * @var string
     */
    protected $enseignant_adresse_zone1;
    /**
     * @var string
     */
    protected $enseignant_code_postal;
    /**
     * @var string
     */
    protected $enseignant_ville;
    /**
     * @var string
     */
    protected $enseignant_pays;
    /**
     * @var string
     */
    protected $enseignant_telephone_pers;
    /**
     * @var string
     */
    protected $enseignant_telephone_port;
    /**
     * @var string
     */
    protected $enseignant_mel_pers;
    /**
     * @var string
     */
    protected $enseignant_mel_pro;
    /**
     * @var string
     */
    protected $enseignant_fonctionnaire;
    /**
     * @var string
     */
    protected $enseignant_retraite;
    /**
     * @var string
     */
    protected $enseignant_independant;
    /**
     * @var string
     */
    protected $enseignant_autre_salarie;
    /**
     * @var string
     */
    protected $enseignant_actif;
    /**
     * @var string
     */
    protected $enseignant_nationalite;
    /**
     * @var string
     */
    protected $enseignant_login_pleiad;
    /**
     * @var string
     */
    protected $enseignant_mel_pleiad;
    /**
     * @var string
     */
    protected $enseignant_identifiant_pleiad;
    /**
     * @var string
     */
    protected $enseignant_adresse_zone2;
    /**
     * @var string
     */
    protected $enseignant_telephone_pro;
    /**
     * @var string
     */
    protected $enseignant_memo_agrement;

    /**
     * @return mixed
     */
    public function getEnseignantCode()
    {
        return $this->enseignant_code;
    }

    /**
     * @param mixed $enseignant_code
     */
    public function setEnseignantCode($enseignant_code)
    {
        $this->enseignant_code = $enseignant_code;
    }

    /**
     * @return mixed
     */
    public function getEnseignantNom()
    {
        return $this->enseignant_nom;
    }

    /**
     * @param mixed $enseignant_nom
     */
    public function setEnseignantNom($enseignant_nom)
    {
        $this->enseignant_nom = $enseignant_nom;
    }

    /**
     * @return mixed
     */
    public function getEnseignantPrenom()
    {
        return $this->enseignant_prenom;
    }

    /**
     * @param mixed $enseignant_prenom
     */
    public function setEnseignantPrenom($enseignant_prenom)
    {
        $this->enseignant_prenom = $enseignant_prenom;
    }

    /**
     * @return string
     */
    public function getEnseignantSexe()
    {
        return $this->enseignant_sexe;
    }

    /**
     * @param string $enseignant_sexe
     */
    public function setEnseignantSexe($enseignant_sexe)
    {
        $this->enseignant_sexe = $enseignant_sexe;
    }

    /**
     * @return string
     */
    public function getEnseignantCivilite()
    {
        return $this->enseignant_civilite;
    }

    /**
     * @param string $enseignant_civilite
     */
    public function setEnseignantCivilite($enseignant_civilite)
    {
        $this->enseignant_civilite = $enseignant_civilite;
    }

    /**
     * @return string
     */
    public function getEnseignantProfil()
    {
        return $this->enseignant_profil;
    }

    /**
     * @param string $enseignant_profil
     */
    public function setEnseignantProfil($enseignant_profil)
    {
        $this->enseignant_profil = $enseignant_profil;
    }

    /**
     * @return string
     */
    public function getEnseignantCategorie()
    {
        return $this->enseignant_categorie;
    }

    /**
     * @param string $enseignant_categorie
     */
    public function setEnseignantCategorie($enseignant_categorie)
    {
        $this->enseignant_categorie = $enseignant_categorie;
    }

    /**
     * @return string
     */
    public function getEnseignantSituationFamille()
    {
        return $this->enseignant_situation_famille;
    }

    /**
     * @param string $enseignant_situation_famille
     */
    public function setEnseignantSituationFamille($enseignant_situation_famille)
    {
        $this->enseignant_situation_famille = $enseignant_situation_famille;
    }

    /**
     * @return string
     */
    public function getEnseignantNumeroSecu()
    {
        return $this->enseignant_numero_secu;
    }

    /**
     * @param string $enseignant_numero_secu
     */
    public function setEnseignantNumeroSecu($enseignant_numero_secu)
    {
        $this->enseignant_numero_secu = $enseignant_numero_secu;
    }

    /**
     * @return string
     */
    public function getEnseignantDateNaissance()
    {
        return $this->enseignant_date_naissance;
    }

    /**
     * @param string $enseignant_date_naissance
     */
    public function setEnseignantDateNaissance($enseignant_date_naissance)
    {
        $this->enseignant_date_naissance = $enseignant_date_naissance;
    }

    /**
     * @return string
     */
    public function getEnseignantLieuNaissance()
    {
        return $this->enseignant_lieu_naissance;
    }

    /**
     * @param string $enseignant_lieu_naissance
     */
    public function setEnseignantLieuNaissance($enseignant_lieu_naissance)
    {
        $this->enseignant_lieu_naissance = $enseignant_lieu_naissance;
    }

    /**
     * @return string
     */
    public function getEnseignantAdresseZone1()
    {
        return $this->enseignant_adresse_zone1;
    }

    /**
     * @param string $enseignant_adresse_zone1
     */
    public function setEnseignantAdresseZone1($enseignant_adresse_zone1)
    {
        $this->enseignant_adresse_zone1 = $enseignant_adresse_zone1;
    }

    /**
     * @return string
     */
    public function getEnseignantCodePostal()
    {
        return $this->enseignant_code_postal;
    }

    /**
     * @param string $enseignant_code_postal
     */
    public function setEnseignantCodePostal($enseignant_code_postal)
    {
        $this->enseignant_code_postal = $enseignant_code_postal;
    }

    /**
     * @return string
     */
    public function getEnseignantVille()
    {
        return $this->enseignant_ville;
    }

    /**
     * @param string $enseignant_ville
     */
    public function setEnseignantVille($enseignant_ville)
    {
        $this->enseignant_ville = $enseignant_ville;
    }

    /**
     * @return string
     */
    public function getEnseignantPays()
    {
        return $this->enseignant_pays;
    }

    /**
     * @param string $enseignant_pays
     */
    public function setEnseignantPays($enseignant_pays)
    {
        $this->enseignant_pays = $enseignant_pays;
    }

    /**
     * @return string
     */
    public function getEnseignantTelephonePers()
    {
        return $this->enseignant_telephone_pers;
    }

    /**
     * @param string $enseignant_telephone_pers
     */
    public function setEnseignantTelephonePers($enseignant_telephone_pers)
    {
        $this->enseignant_telephone_pers = $enseignant_telephone_pers;
    }

    /**
     * @return string
     */
    public function getEnseignantTelephonePort()
    {
        return $this->enseignant_telephone_port;
    }

    /**
     * @param string $enseignant_telephone_port
     */
    public function setEnseignantTelephonePort($enseignant_telephone_port)
    {
        $this->enseignant_telephone_port = $enseignant_telephone_port;
    }

    /**
     * @return string
     */
    public function getEnseignantMelPers()
    {
        return $this->enseignant_mel_pers;
    }

    /**
     * @param string $enseignant_mel_pers
     */
    public function setEnseignantMelPers($enseignant_mel_pers)
    {
        $this->enseignant_mel_pers = $enseignant_mel_pers;
    }

    /**
     * @return string
     */
    public function getEnseignantMelPro()
    {
        return $this->enseignant_mel_pro;
    }

    /**
     * @param string $enseignant_mel_pro
     */
    public function setEnseignantMelPro($enseignant_mel_pro)
    {
        $this->enseignant_mel_pro = $enseignant_mel_pro;
    }

    /**
     * @return string
     */
    public function getEnseignantFonctionnaire()
    {
        return $this->enseignant_fonctionnaire;
    }

    /**
     * @param string $enseignant_fonctionnaire
     */
    public function setEnseignantFonctionnaire($enseignant_fonctionnaire)
    {
        $this->enseignant_fonctionnaire = $enseignant_fonctionnaire;
    }

    /**
     * @return string
     */
    public function getEnseignantRetraite()
    {
        return $this->enseignant_retraite;
    }

    /**
     * @param string $enseignant_retraite
     */
    public function setEnseignantRetraite($enseignant_retraite)
    {
        $this->enseignant_retraite = $enseignant_retraite;
    }

    /**
     * @return string
     */
    public function getEnseignantIndependant()
    {
        return $this->enseignant_independant;
    }

    /**
     * @param string $enseignant_independant
     */
    public function setEnseignantIndependant($enseignant_independant)
    {
        $this->enseignant_independant = $enseignant_independant;
    }

    /**
     * @return string
     */
    public function getEnseignantAutreSalarie()
    {
        return $this->enseignant_autre_salarie;
    }

    /**
     * @param string $enseignant_autre_salarie
     */
    public function setEnseignantAutreSalarie($enseignant_autre_salarie)
    {
        $this->enseignant_autre_salarie = $enseignant_autre_salarie;
    }

    /**
     * @return string
     */
    public function getEnseignantActif()
    {
        return $this->enseignant_actif;
    }

    /**
     * @param string $enseignant_actif
     */
    public function setEnseignantActif($enseignant_actif)
    {
        $this->enseignant_actif = $enseignant_actif;
    }

    /**
     * @return string
     */
    public function getEnseignantNationalite()
    {
        return $this->enseignant_nationalite;
    }

    /**
     * @param string $enseignant_nationalite
     */
    public function setEnseignantNationalite($enseignant_nationalite)
    {
        $this->enseignant_nationalite = $enseignant_nationalite;
    }

    /**
     * @return string
     */
    public function getEnseignantLoginPleiad()
    {
        return $this->enseignant_login_pleiad;
    }

    /**
     * @param string $enseignant_login_pleiad
     */
    public function setEnseignantLoginPleiad($enseignant_login_pleiad)
    {
        $this->enseignant_login_pleiad = $enseignant_login_pleiad;
    }

    /**
     * @return string
     */
    public function getEnseignantMelPleiad()
    {
        return $this->enseignant_mel_pleiad;
    }

    /**
     * @param string $enseignant_mel_pleiad
     */
    public function setEnseignantMelPleiad($enseignant_mel_pleiad)
    {
        $this->enseignant_mel_pleiad = $enseignant_mel_pleiad;
    }

    /**
     * @return string
     */
    public function getEnseignantIdentifiantPleiad()
    {
        return $this->enseignant_identifiant_pleiad;
    }

    /**
     * @param string $enseignant_identifiant_pleiad
     */
    public function setEnseignantIdentifiantPleiad($enseignant_identifiant_pleiad)
    {
        $this->enseignant_identifiant_pleiad = $enseignant_identifiant_pleiad;
    }

    /**
     * @return string
     */
    public function getEnseignantNomUsage()
    {
        return (is_null($this->enseignant_nom_usage)) ? $this->enseignant_nom : $this->enseignant_nom_usage;
    }

    /**
     * @param string $enseignant_nom_usage
     */
    public function setEnseignantNomUsage($enseignant_nom_usage)
    {
        $this->enseignant_nom_usage = $enseignant_nom_usage;
    }

    /**
     * @return string
     */
    public function getEnseignantAdresseZone2()
    {
        return $this->enseignant_adresse_zone2;
    }

    /**
     * @param string $enseignant_adresse_zone2
     */
    public function setEnseignantAdresseZone2($enseignant_adresse_zone2)
    {
        $this->enseignant_adresse_zone2 = $enseignant_adresse_zone2;
    }

    /**
     * @return string
     */
    public function getEnseignantTelephonePro()
    {
        return $this->enseignant_telephone_pro;
    }

    /**
     * @param string $enseignant_telephone_pro
     */
    public function setEnseignantTelephonePro($enseignant_telephone_pro)
    {
        $this->enseignant_telephone_pro = $enseignant_telephone_pro;
    }

    /**
     * @return string
     */
    public function getEnseignantMemoAgrement()
    {
        return $this->enseignant_memo_agrement;
    }

    /**
     * @param string $enseignant_memo_agrement
     */
    public function setEnseignantMemoAgrement($enseignant_memo_agrement)
    {
        $this->enseignant_memo_agrement = $enseignant_memo_agrement;
    }
}
