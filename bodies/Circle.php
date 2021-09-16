<?php

namespace bodies;

require_once("includer.php");

class Circle implements \bodies\Body
{
    CONST PI=3.14;
    public float $r=0;
    function __construct($r)
    {
        $this->r=$r;
    }
    public function volume() : float
    {
        return 2*self::PI*$this->r;
    }
    public function surface() : float
    {
        return self::PI*self::PI*$this->r;
    }
}
?>