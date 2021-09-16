<?php

namespace tela;

require_once("arh.php");

class Krug implements \tela\Telo
{
    CONST PI=3.14;
    public float $r=0;
    function __construct($r)
    {
        $this->r=$r;
    }
    public function Obim() : float
    {
        return 2*self::PI*$this->r;
    }
    public function Povrsina() : float
    {
        return self::PI*self::PI*$this->r;
    }
}
?>