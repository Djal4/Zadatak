<?php
require_once("includer.php");
use \bodies\{
    Circle,
    Triangle,
    Rectangle,
    Polygon
};
$bodies=[
    $circle=new Circle(3),
    $triangle=new Triangle(3,4,5),
    $rectangle=new Rectangle(4,3),
    $polygon= new Polygon(8,6,6,6,6,6,6,6),
];

writeOut($bodies);
?>