<?php
require_once("includer.php");
use \bodies\{
    Circle,
    Triangle,
    Rectangle,
    Polygon,
    Body
};
$bodies=[
    $circle=new Circle(3),
    $triangle=new Triangle(3,4,5),
    $rectangle=new Rectangle(4,3),
    $polygon= new Polygon(8,6,6,6,6,6,6,6),
];

function write_out(Body $body)
{
        echo (explode('\\',get_class($body))[1])."<br>";
        echo "Volume: ".$body->volume()."cm<br>";
        echo "Surface: ".$body->surface()."cm<br>";
}
function writeOut($bodies)
{
    foreach($bodies as $body)
        write_out($body);
}
writeOut($bodies);
?>