<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Parser;

class XMLParser implements ParserInterface
{
    /**
     * @param string $rawData
     * @return array
     */
    public function parse($rawData)
    {
        $result = array();
        $xml    = new \SimpleXMLElement($this->getXmlString($rawData));
        if (!$xml->children()) {
            return $result;
        }
        $xml    = $xml->children()->children();
        $nb     = $xml->count();
        for ($i = 0; $i < $nb; $i++) {
            if ($xml->Table1[$i]) {
                 $result[] = $this->simpleXMLToArray($xml->Table1[$i]);
            }
        }

        return $result;
    }

    /**
     * @param \SimpleXMLElement $object
     * @return array
     */
    protected function simpleXMLToArray(\SimpleXMLElement $object)
    {
        $result = array();
        foreach ($object as $key => $value) {
            $result[$key] = (string) $value;
        }

        return $result;
    }

    /**
     * @param $rawData
     * @return mixed
     */
    protected function getXmlString($rawData)
    {
        return $rawData->RequeteurResult->any;
    }

}