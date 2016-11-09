<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Filter\Simple;


use Zac2\Common\DateTime;
use Zac2\Common\FilterInterface;
use Zend\Db\Sql\Expression;

class MssqlDate implements FilterInterface
{

    public function filter($value)
    {
        $value = new DateTime($value);
        return new Expression('convert(datetime, ?)', $value->format('d/m/Y'));
    }

}
