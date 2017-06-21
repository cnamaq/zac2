<?php


namespace Zac2\Domain;

/**
 * @Entity @Table(name="type_bpf")
 */
class TypeBpf
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
    protected $code_bpf;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $libelle;
    /**
     * @var string
     * @Column(type="string")
     */
    protected $code_compta_analytique;

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
    public function getCodeBpf()
    {
        return $this->code_bpf;
    }

    /**
     * @param string $code_bpf
     */
    public function setCodeBpf($code_bpf)
    {
        $this->code_bpf = $code_bpf;
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
    public function getCodeComptaAnalytique()
    {
        return $this->code_compta_analytique;
    }

    /**
     * @param string $code_compta_analytique
     */
    public function setCodeComptaAnalytique($code_compta_analytique)
    {
        $this->code_compta_analytique = $code_compta_analytique;
    }


}