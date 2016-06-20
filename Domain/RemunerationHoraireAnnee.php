<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Entity\EntityAbstract;

class RemunerationHoraireAnnee extends EntityAbstract
{
    /**
     * @var integer
     */
    protected $annee;
    /**
     * @var array
     */
    protected $tauxArray = array();

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
     * @return array
     */
    public function getTauxArray()
    {
        return $this->tauxArray;
    }

    /**
     * @param array $tauxArray
     */
    public function setTauxArray($tauxArray)
    {
        $this->tauxArray = $tauxArray;
    }

    /**
     * @param  string $type
     * @return float
     * @throws \Exception
     */
    public function getTaux($type)
    {
        if (!array_key_exists($type, $this->getTauxArray())) {
            throw new \Exception('pas de taux horaire pour ' . $type);
        }

        return (float) $this->getTauxArray()[$type];
    }

}
