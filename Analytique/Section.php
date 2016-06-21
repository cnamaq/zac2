<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Analytique;


use Zac2\Entity\EntityAbstract;

class Section extends EntityAbstract
{
    /**
     * @var string
     */
    protected $site;
    /**
     * @var string
     */
    protected $composante;
    /**
     * @var string
     */
    protected $modalite;
    /**
     * @var string
     */
    protected $projet;

    /**
     * @return string
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * @param string $projet
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return string
     */
    public function getComposante()
    {
        return $this->composante;
    }

    /**
     * @param string $composante
     */
    public function setComposante($composante)
    {
        $this->composante = $composante;
    }

    /**
     * @return string
     */
    public function getModalite()
    {
        return $this->modalite;
    }

    /**
     * @param string $modalite
     */
    public function setModalite($modalite)
    {
        $this->modalite = $modalite;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getSite() . $this->getComposante() . $this->getModalite() . $this->getProjet();
    }

}
