<?php

namespace bodies;
class Triangle implements \bodies\Body
{
    private float $a=0,$b=0,$c=0,$s=0;
    function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        $this->s=($this->a+$this->b+$this->c)/2;
    }
    public function volume() : float
    {
        return $this->a+$this->b+$this->c;
    }
    public function surface() : float
    {
        $this->s=($this->a+$this->b+$this->c)/2;
        return sqrt($this->s*($this->s-$this->a)*($this->s-$this->b)*($this->s-$this->c));
    }
}
?>