<?php

namespace AppBundle\Service;


class JSConfig
{
    private $config = [
        'randomizerVersion' => 2,
        'calculatorVersion' => 3
    ];

    /**
     * @return array
     */
    public function getAll()
    {
        return $this->config;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function setKey($key, $value)
    {
        $this->config[$key] = $value;

        return $this;
    }
}