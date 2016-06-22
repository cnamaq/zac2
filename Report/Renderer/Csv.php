<?php
/**
 * Created by PhpStorm.
 * User: fohl
 * Date: 09/05/16
 * Time: 12:16
 */

namespace Zac2\Report\Renderer;


use Zac2\Report\Container\ContainerAbstract;

class Csv implements Renderable
{
    /**
     * @var array
     */
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param ContainerAbstract $container
     * @return string csv
     */
    public function render(ContainerAbstract $container)
    {
        if (in_array(get_class($container), $this->config['containers'])) {
            $result = array();
            foreach ($this->config['fields'] as $field) {
                $method = 'get' . ucfirst($field);
                $result[] = $container->$method();
            }

            return implode(';', $result) . chr(13);
        }
    }

}
