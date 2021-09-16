<?php

namespace bodies;

use \bodies\Body;
class Polygon implements Body
{
    private float $volume=0,$surface=0,$H;
    private $pars;
    function __construct($h,...$params)
    {
        $this->pars=$params;
        $this->H=$h;
    }
    public function volume() : float
    {
        foreach($this->pars as $par)
        $this->volume+=$par;
        return $this->volume;
    }
    public function surface() : float
    {
        foreach($this->pars as $par)
        $this->surface+=$this->H*$par/2;
        return $this->surface;
    }
}
