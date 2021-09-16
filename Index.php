<?php
require_once("includer.php");
$circle=new \bodies\Circle(3);
echo "Circle<br>";
echo "Side length: 3cm";
echo "<br>";
echo "Volume: ".$circle->volume()."cm";
echo "\n";
echo "Surface: ".$circle->surface()."cm";
echo "<br>";
echo "<br>";

$triangle=new \bodies\Triangle(3,4,5);
echo "Triangle<br>";
echo "Sides lengths: 3cm,4cm,5cm";
echo "<br>";
echo "Volume: ".$triangle->volume()."cm";
echo "\n";
echo "Surface: ".$triangle->surface()."cm";
echo "<br>";
echo "<br>";

$rectangle=new \bodies\Rectangle(4,3);
echo "Rectangle<br>";
echo "Sides lengths: 3cm,4cm";
echo "<br>";
echo "Volume: ".$rectangle->volume()."cm";
echo "\n";
echo "Surface: ".$rectangle->surface()."cm";
echo "<br>";
echo "<br>";

$polygon= new \bodies\Polygon(8,6,6,6,6,6,6,6);
echo "Polygon<br>";
echo "Sides lengths: 6cm(6 sides), height:8cm";
echo "<br>";
echo "Volume: ".$polygon->volume()."cm";
echo "\n";
echo "Surface: ".$polygon->surface()."cm";
?>