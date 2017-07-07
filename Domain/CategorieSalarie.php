<?php


namespace Zac2\Domain;

/**
 * @Entity @Table(name="categorie_salarie")
 */
class CategorieSalarie
{
    /**
     * @var int
     * @Id() @Column(type="integer") @GeneratedValue())
     */
    protected $id;
    /**
     * @var string
     * @Column(type="string", name="libelle_sage")
     */
    protected $libelleSage;
    /**
     * @var string
     * @Column(type="string", name="libelle_compta_generale")
     */
    protected $libelleComptaGenerale;
    /**
     * @var string
     * @Column(type="string", name="numero_compte_compta_generale")
     */
    protected $numeroCompteComptaGenerale;

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
    public function getLibelleSage()
    {
        return $this->libelleSage;
    }

    /**
     * @param string $libelleSage
     */
    public function setLibelleSage($libelleSage)
    {
        $this->libelleSage = $libelleSage;
    }

    /**
     * @return string
     */
    public function getLibelleComptaGenerale()
    {
        return $this->libelleComptaGenerale;
    }

    /**
     * @param string $libelleComptaGenerale
     */
    public function setLibelleComptaGenerale($libelleComptaGenerale)
    {
        $this->libelleComptaGenerale = $libelleComptaGenerale;
    }

    /**
     * @return string
     */
    public function getNumeroCompteComptaGenerale()
    {
        return $this->numeroCompteComptaGenerale;
    }

    /**
     * @param string $numeroCompteComptaGenerale
     */
    public function setNumeroCompteComptaGenerale($numeroCompteComptaGenerale)
    {
        $this->numeroCompteComptaGenerale = $numeroCompteComptaGenerale;
    }

}
