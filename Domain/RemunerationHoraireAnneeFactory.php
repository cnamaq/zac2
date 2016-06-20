<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Domain;


use Zac2\Common\DicAware;

class RemunerationHoraireAnneeFactory extends DicAware
{
    public function create($annee)
    {
        $result = new RemunerationHoraireAnnee();

        $em = $this->getDic()->get('entitymanager');

        $taux = array();
        $entities = $em->get('remunerationHoraire', array('annee' => $annee));
        foreach ($entities as $entity) {
            $taux[$entity->getRemunerationAction()] = (float) $entity->getRemunerationTarif();
        }

        $result->setTauxArray($taux);

        return $result;
    }
}
