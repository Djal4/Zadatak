<?php

namespace tela;
    
require_once("arh.php");

class Trougao implements \tela\Telo
{
    public float $a=0,$b=0,$c=0,$s=0;
    function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        $this->s=($this->a+$this->b+$this->c)/2;
    }
    public function Obim() : float
    {
        return $this->a+$this->b+$this->c;
    }
    public function Povrsina() : float
    {
        $this->s=($this->a+$this->b+$this->c)/2;
        return sqrt($this->s*($this->s-$this->a)*($this->s-$this->b)*($this->s-$this->c));
    }
}
?>