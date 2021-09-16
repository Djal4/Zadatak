<?php

namespace bodies;

require_once("includer.php");

class Rectangle implements \bodies\Body
{
    public float $a=0,$b=0;
    function __construct($A,$B)
    {
        $this->a=$A;
        $this->b=$B;
    }
    public function volume() : float
    {
        return 2*($this->a+$this->b);
    }
    public function surface() : float
    {
        return $this->a*$this->b;
    }
}
?>