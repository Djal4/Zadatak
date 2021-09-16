<?php

namespace tela;

require_once("arh.php");


class Mnogougao implements \tela\Telo
{
    static $obim=0,$povr=0;
    function __construct($h,...$params)
    {
        foreach($params as $par)
        {
            self::$obim+=$par;
            self::$povr+=$h*$par/2;
        }
    }
    public function Obim() : float
    {
        return self::$obim;
    }
    public function Povrsina() : float
    {
        return self::$povr;
    }
}
