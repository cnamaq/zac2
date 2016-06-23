<?php

namespace Zac2\Data;


use League\Csv\Reader;
use Doctrine\ORM\EntityManager;

class CsvToDb
{

    const MESSAGE_SUCCESS = '<p class="message success">Marquage réussi : ';
    const MESSAGE_ERROR   = <<<HTML
            <p class="message error">
                <p>ERREUR</p>
                <p>Des lignes du fichier csv ont déjà été taggées.</p>
                <p>Opération annulée pour l'ensemble du fichier.</p>
            </p>
HTML;

    /**
     * @var EntityManager
     */
    protected $em;
    /**
     * @var Reader
     */
    protected $csvReader;
    /**
     * @var string
     */
    protected $message;

    /**
     * @return EntityManager
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param EntityManager $em
     */
    public function setEm(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return Reader
     */
    public function getCsvReader()
    {
        return $this->csvReader;
    }

    /**
     * @param Reader $csvReader
     */
    public function setCsvReader(Reader $csvReader)
    {
        $this->csvReader = $csvReader;
    }

    /**
     * Tagger constructor.
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->setCsvReader($params['csvReader']);
        $this->setEm($params['entityManager']);
        if (!ini_get("auto_detect_line_endings")) {
            ini_set("auto_detect_line_endings", '1');
        }
    }

    /**
     * @param $entity
     * @throws \Exception
     */
    public function tag($entity)
    {
        $this->getCsvReader()->setDelimiter(';');
        $keys = $this->getCsvReader()->fetchOne();
        $this->getCsvReader()->setOffset(1);
        $rows = $this->getCsvReader()->fetchAssoc($keys);

        $cpt = 0;
        foreach ($rows as $row) {
            $object = new $entity($row);
            $this->getEm()->persist($object);
            $cpt++;
        }

        try {
            $this->getEm()->flush();
            $this->message = self::MESSAGE_SUCCESS . $cpt . ' enregistrements</p>';
        } catch (\Exception $e) {
            $this->message = self::MESSAGE_ERROR;
            throw $e;
        }
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

}