<?php

namespace Hiera;

class DataSource
{
    private $key;
    
    public function __construct($key)
    {
        $this->key = $key;
    }
    
    public function getKey()
    {
        return $this->key;
    }
}
