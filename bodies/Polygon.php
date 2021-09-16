<?php

namespace bodies;
class Polygon implements \bodies\Body
{
    private float $volume=0,$surface=0;
    function __construct($h,...$params)
    {
        foreach($params as $par)
        {
            $this->volume+=$par;
            $this->surface+=$h*$par/2;
        }
    }
    public function volume() : float
    {
        return $this->volume;
    }
    public function surface() : float
    {
        return $this->surface;
    }
}
