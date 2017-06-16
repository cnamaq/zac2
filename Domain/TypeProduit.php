<?php


namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

/**
 * @Entity @Table(name="type_produit_comptable")
 */
class TypeProduit extends EntityAbstract
{
    /**
     * @var int
     * @Id() @Column(type="integer") @GeneratedValue())
     */
    protected $id;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $libelle;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $compte7_ind;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $compte7_pec;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $analytique_budget;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $analytique_produit;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getCompte7Ind()
    {
        return $this->compte7_ind;
    }

    /**
     * @param string $compte7_ind
     */
    public function setCompte7Ind($compte7_ind)
    {
        $this->compte7_ind = $compte7_ind;
    }

    /**
     * @return string
     */
    public function getCompte7Pec()
    {
        return $this->compte7_pec;
    }

    /**
     * @param string $compte7_pec
     */
    public function setCompte7Pec($compte7_pec)
    {
        $this->compte7_pec = $compte7_pec;
    }

    /**
     * @return string
     */
    public function getAnalytiqueBudget()
    {
        return $this->analytique_budget;
    }

    /**
     * @param string $analytique_budget
     */
    public function setAnalytiqueBudget($analytique_budget)
    {
        $this->analytique_budget = $analytique_budget;
    }

    /**
     * @return string
     */
    public function getAnalytiqueProduit()
    {
        return $this->analytique_produit;
    }

    /**
     * @param string $analytique_produit
     */
    public function setAnalytiqueProduit($analytique_produit)
    {
        $this->analytique_produit = $analytique_produit;
    }

}