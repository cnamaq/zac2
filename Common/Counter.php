<?php
namespace Zac2\Common;

class Counter
{

    /**
     * @var array
     */
    protected $counterLst = array();

    /**
     * @param array $init
     */
    public function __construct(array $init = null)
    {
        if (!is_null($init)) {
            foreach ($init as $counter) {
                $this->set($counter);
            }
        }
    }

    /**
     * @param  string $counter
     * @return mixed
     */
    public function get($counter)
    {
        $this->counterExists($counter);
        return $this->counterLst[$counter];
    }

    /**
     * @param string $counter
     * @param int $value
     */
    public function set($counter, $value = 0)
    {
        $this->counterLst[$counter] = $value;
    }

    /**
     * @param string $counter
     */
    public function reset($counter)
    {
        $this->counterExists($counter);
        $this->counterLst[$counter] = 0;
    }

    /**
     * @param $counter
     */
    public function delete($counter)
    {
        $this->counterExists($counter);
        unset($this->counterLst[$counter]);
    }

    /**
     * @param string $counter
     * @param int $offset
     */
    public function increment($counter, $offset = 1)
    {
        $this->counterExists($counter);
        $this->counterLst[$counter] += $offset;
    }

    /**
     * @param string $counter
     * @param int $offset
     */
    public function decrement($counter, $offset = 1)
    {
        $this->counterExists($counter);
        $this->counterLst[$counter] -= $offset;
    }

    /**
     *
     */
    public function resetAll()
    {
        foreach($this->counterLst as $key => $val) {
            $this->reset($key);
        }
    }

    /**
     *
     */
    public function deleteAll()
    {
        foreach($this->counterLst as $key => $val) {
            $this->delete($key);
        }
    }

    /**
     * @param string $counter
     * @return bool
     */
    public function has($counter)
    {
        return array_key_exists($counter, $this->counterLst);
    }

    /**
     * @param string $counter
     * @throws \Exception
     */
    public function counterExists($counter)
    {
        if (!$this->has($counter)) {
            throw new \Exception('compteur ' . $counter . ' inexistant');
        }
    }

    /**
     * @return array
     */
    public function getCounterLst()
    {
        return $this->counterLst;
    }

}