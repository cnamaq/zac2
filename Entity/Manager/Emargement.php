<?php
/**
 * Created by PhpStorm.
 * User: fohl
 * Date: 27/05/16
 * Time: 11:43
 */

namespace Zac2\Entity\Manager;


use Zac2\Common\DicAware;
use Zac2\Data\Request\SqlString;
use Zac2\Domain\RemunerationHoraireAnnee;
use Zac2\Filter\Multi\Multi;

class Emargement extends DicAware implements ManagerInterface
{

    /**
     * @var RemunerationHoraireAnnee
     */
    protected $remunerationHoraireAnnee;

    public function get($entity, Multi $filtre)
    {
        $em = $this->getDic()->get('entitymanager.gescicca.requeteur');
        $dataRequest = new SqlString();
        // le filtrage doit être appliqué ici à la main
        $sql = "SELECT e.*, 
                uo.regroupement_programme_code, uo.regroupement_programme_libelle
            FROM emargement_aqu as e
            LEFT JOIN unite_ouverte_aqu as uo ON uo.centre_code = e.centre_code 
                AND uo.annee = e.annee 
                AND uo.unite_numero = e.unite_numero
                AND uo.semestre_code = e.semestre_code
                AND uo.groupe_code = e.groupe_code";
        if ($filtre->getSql()) {
            $sql .= ' WHERE ' . $filtre->getSql('e.');
        }
        $dataRequest->setSql($sql);
        $em->setDataRequestAdapter($dataRequest);

        $result = $em->get('\Zac2\Domain\Emargement', $filtre);
        foreach ($result as $emargement) {
            /** @var \Zac2\Domain\Emargement $emargement */
            $emargement->setRemunerationHoraireAnnee($this->getRemunerationHoraireAnnee($emargement->getAnnee()));
        }
    }

    /**
     * @param $annee
     * @return RemunerationHoraireAnnee
     * @throws \Exception
     */
    protected function getRemunerationHoraireAnnee($annee)
    {
        if (is_null($this->remunerationHoraireAnnee)) {
            $factory = $this->getDic()->get('remunerationhoraireanneefactory');
            $this->remunerationHoraireAnnee = $factory->create($annee);
        }

        return $this->remunerationHoraireAnnee;
    }

}
