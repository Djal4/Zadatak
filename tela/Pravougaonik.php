<?php

namespace tela;

require_once("arh.php");

class Pravougaonik implements \tela\Telo
{
    public float $a=0,$b=0;
    function __construct($A,$B)
    {
        $this->a=$A;
        $this->b=$B;
    }
    public function Obim() : float
    {
        return 2*($this->a+$this->b);
    }
    public function Povrsina() : float
    {
        return $this->a*$this->b;
    }
}
?>