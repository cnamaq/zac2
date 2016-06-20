<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class TypeBaseForfaitaire extends EntityAbstract
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $libelle;
    /**
     * @var
     */
    protected $typeEvenements;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
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
     * @return mixed
     */
    public function getTypeEvenements()
    {
        return $this->typeEvenements;
    }

    /**
     * @param mixed $typeEvenements
     */
    public function setTypeEvenements(array $typeEvenements)
    {
        $this->typeEvenements = $typeEvenements;
    }
}