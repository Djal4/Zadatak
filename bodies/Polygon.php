<?php

namespace bodies;

require_once("includer.php");

class Polygon implements \bodies\Body
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
    public function volume() : float
    {
        return self::$obim;
    }
    public function surface() : float
    {
        return self::$povr;
    }
}
