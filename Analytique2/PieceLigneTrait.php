<?php


namespace Zac2\Analytique2;


use Zac2\Domain\Etablissement;
use Zac2\Domain\TypeBpf;
use Zac2\Domain\TypeProduit;

trait PieceLigneTrait
{

    /**
     * @var Etablissement
     */
    protected $etablissement;
    /**
     * @var TypeProduit
     */
    protected $typeProduit;
    /**
     * @var TypeBpf
     */
    protected $typeBpf;

    /**
     * @return Etablissement
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * @param Etablissement $etablissement
     */
    public function setEtablissement(Etablissement $etablissement)
    {
        $this->etablissement = $etablissement;
    }

    /**
     * @return TypeProduit
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * @param TypeProduit $typeProduit
     */
    public function setTypeProduit(TypeProduit $typeProduit)
    {
        $this->typeProduit = $typeProduit;
    }

    /**
     * @return TypeBpf
     */
    public function getTypeBpf()
    {
        return $this->typeBpf;
    }

    /**
     * @param TypeBpf $typeBpf
     */
    public function setTypeBpf(TypeBpf $typeBpf)
    {
        $this->typeBpf = $typeBpf;
    }

}
