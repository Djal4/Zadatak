<?php

namespace bodies;

use \bodies\Body;
class Circle implements Body
{
    private CONST PI=3.14;
    private float $r=0;
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