<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Filter\Multi;

use Zac2\Common\DateTime;
use Zac2\Data\Request\FilterInterface;

class Multi implements FilterInterface
{

    /**
     * @var string
     */
    protected $nom;
    /**
     * @var Critere[]
     */
    protected $critereLst;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param Critere[] $critereLst
     */
    public function setCritereLst(array $critereLst)
    {
        $this->critereLst = $critereLst;
    }

    /**
     * @return  Critere[]
     */
    public function getCritereLst()
    {
        return $this->critereLst;
    }

    /**
     * @param Critere $critere
     */
    public function addCritere(Critere $critere)
    {
        $index = ($critere->getId()) ? $critere->getId() : $critere->getKey();
        $this->critereLst[$index] = $critere;
    }

    /**
     * @param string $id
     * @return Critere
     */
    public function getCritere($id)
    {
        if (!$this->hasCritere($id)) {
            return null;
        }

        return $this->critereLst[$id];
    }

    /**
     * @param string $id
     * @return bool
     * @throws Exception
     */
    public function removeCritere($id)
    {
        if (!$this->hasCritere($id)) {
            throw new Exception('Le critere ' . $id . ' n\'existe pas, suppression impossible.');
        }
        unset($this->critereLst[$id]);

        return true;
    }

    /**
     * @param string $id
     * @return boolean
     */
    public function hasCritere($id)
    {
        return array_key_exists($id, $this->critereLst);
    }

    /**
     * @param array $values
     * @return $this
     */
    public function setValues(array $values)
    {
        foreach ($this->getCritereLst() as $critere) {
            if (array_key_exists($critere->getValueFrom(), $values) && !$critere->isReadOnly()) {
                $critere->setValue($values[$critere->getValueFrom()]);
            }
        }

        return $this;
    }

    /**
     * @param  \Zac2\Data\Request\Adapter $sqlComponent
     * @return \Zac2\Data\Request\Adapter
     */
    public function filter(\Zac2\Data\Request\Adapter $sqlComponent)
    {
        foreach ($this->getCritereLst() as $critere) {
            if ($this->critereIsActive($critere)) {
                $sqlComponent->{$critere->getOperator()}($critere);
            }
        }

        return $sqlComponent;
    }

    /**
     * @param Critere $critere
     * @return bool
     */
    protected function critereIsActive(Critere $critere)
    {
        if ($critere->getOperator() == 'isNull'
         || $critere->getOperator() == 'isNotNull') {
            return true;
        }
        if (is_null($critere->getValue())) {
            return false;
        }

        return true;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        $result = array();
        foreach ($this->getCritereLst() as $critere) {
            if (!is_null($critere->getValue())) {
                $result[$critere->getKey()] = $critere->getValue();
            }
        }

        return $result;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return serialize($this);
    }

    /**
     * @param null|string $prefix
     * @return string
     */
    public function getSql($prefix = null)
    {
        $operatorSQL = array(
            'equalTo' => '=',
            'lessThanOrEqualTo' => '<=',
            'greaterThanOrEqualTo' => '>=',
            'notEqualTo' => '!=',
            'isNull' => 'IS NULL',
            'isNotNull' => 'IS NOT NULL',
            'greaterThan' => '>',
            'lessThan' => '<',
            'in' => 'IN',
        );
        $sql = array();
        foreach ($this->getCritereLst() as $critere) {
            if ($this->critereIsActive($critere)) {
                if (preg_match('/_date/', $critere->getKey())) {
                    $date = new DateTime($critere->getValue());
                    $value = "convert(datetime, '{$date->format('d/m/Y')}')";
                } elseif (is_array($critere->getValue())) {
                    $value = "('" . implode("', '", $critere->getValue()) . "')";
                } else {
                    $value = "'" . $critere->getValue() . "'";
                }

                if (in_array($critere->getOperator(), array('isNull', 'isNotNull'))) {
                    $sql[] = $prefix . $critere->getKey()
                           . ' '
                           . $operatorSQL[$critere->getOperator()];
                } else {
                    $sql[] = $prefix . $critere->getKey()
                           . ' '
                           . $operatorSQL[$critere->getOperator()]
                           . ' '
                           . $value;
                }
            }
        }

        return implode(' AND ', $sql);
    }

}
