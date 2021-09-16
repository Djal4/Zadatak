<?php
require_once("includer.php");
$bodies=[
    $circle=new \bodies\Circle(3),
    $triangle=new \bodies\Triangle(3,4,5),
    $rectangle=new \bodies\Rectangle(4,3),
    $polygon= new \bodies\Polygon(8,6,6,6,6,6,6,6),
];

writeOut($bodies);
?>