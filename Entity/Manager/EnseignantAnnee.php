<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Entity\Manager;


use Zac2\Common\DicAware;
use Zac2\Data\Request\SqlString;
use Zac2\Domain\Enseignant;
use Zac2\Entity\Manager;
use Zac2\Filter\Multi\Critere;
use Zac2\Filter\Multi\Multi;

class EnseignantAnnee extends DicAware implements ManagerInterface
{
    
    /**
     * @param Multi $filtre
     * @return array
     */
    public function getIdLst(Multi $filtre)
    {
        return array_keys($this->getMultiOptions($filtre));
    }

    public function getEm($entity, Multi $filtre)
    {
        /** @var Manager $em */
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT    m.enseignant_matricule, e.*
                FROM      enseignant_aqu e
                LEFT JOIN matricule_aqu m
                ON        m.centre_code = 285
                AND       m.enseignant_code = e.enseignant_code";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('e.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        return $em;
    }

    /**
     * @param Multi $filtre
     * @return array
     */
    public function getMultiOptions(Multi $filtre)
    {
        $result = array();

        $entityManager  = $this->getDic()->get('entitymanager.gescicca.requeteur.cachesession');
        $entityManager->getDataRequestAdapter()->from('programme_aqu');
        $data           = $entityManager->getArrayData('programme', $filtre);
        foreach ($data as $row) {
            $result[$row['enseignant_code']] = $row['enseignant_nom'] . ' ' . $row['enseignant_prenom'];
        }
        $entityManager->getDataRequestAdapter()->from('remuneration_forfaitaire_aqu');
        $data           = $entityManager->getArrayData('forfait', $filtre);
        foreach ($data as $row) {
            $result[$row['enseignant_code']] = $row['enseignant_nom'] . ' ' . $row['enseignant_prenom'];
        }
        asort($result);

        return $result;
    }

    /**
     * @param string $entity
     * @param Multi $filtre
     * @return Enseignant[]
     * @throws \Exception
     */
    public function get($entity, Multi $filtre)
    {
        if (!$filtre->hasCritere('annee')) {
            throw new \Exception('critère année manquant');
        }
        if ($filtre->hasCritere('enseignant_code') && !($filtre->getCritere('enseignant_code')->getValue())) {
            $filtre->removeCritere('enseignant_code');
        }
        if (!$filtre->hasCritere('enseignant_code')) {
            $idLst = $this->getIdLst($filtre);
            $critere = new Critere(array(
                'id' => 'enseignant_code',
                'key' => 'enseignant_code',
                'valueFrom' => 'enseignant_code',
                'operator' => 'in',
                'value' => $idLst,
            ));
            $filtre->addCritere($critere);
        }
        $filtre->removeCritere('annee');

        /** @var Enseignant[] $result */
        $result = $this->getEm($entity, $filtre)->get('Zac2\Domain\Enseignant', $filtre);

        $enseignantLst = array();
        foreach ($result as $enseignant) {
            $enseignantLst[$enseignant->getNomComplet() . $enseignant->getEnseignantCode()] = $enseignant;
        }
        ksort($enseignantLst);

        return array_values($enseignantLst);
    }

}
