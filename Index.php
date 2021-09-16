<?php
require_once("includer.php");
$krug=new \bodies\Circle(3);
echo "Circle<br>";
echo "Side length: 3cm";
echo "<br>";
echo "Volume: ".$krug->volume()."cm";
echo "\n";
echo "Surface: ".$krug->surface()."cm";
echo "<br>";
echo "<br>";

$tr=new \bodies\Triangle(3,4,5);
echo "Triangle<br>";
echo "Sides lengths: 3cm,4cm,5cm";
echo "<br>";
echo "Volume: ".$tr->volume()."cm";
echo "\n";
echo "Surface: ".$tr->surface()."cm";
echo "<br>";
echo "<br>";

$prav=new \bodies\Rectangle(4,3);
echo "Rectangle<br>";
echo "Sides lengths: 3cm,4cm";
echo "<br>";
echo "Volume: ".$prav->volume()."cm";
echo "\n";
echo "Surface: ".$prav->surface()."cm";
echo "<br>";
echo "<br>";

$sa= new \bodies\Polygon(8,6,6,6,6,6,6,6);
echo "Polygon<br>";
echo "Sides lengths: 6cm(6 sides), height:8cm";
echo "<br>";
echo "Volume: ".$sa->volume()."cm";
echo "\n";
echo "Surface: ".$sa->surface()."cm";
?>