<?php
require_once("tela/Krug.php");
require_once("tela/Pravougaonik.php");
require_once("tela/Trougao.php");
require_once("tela/Mnogougao.php");
$krug=new \tela\Krug(3);
echo $krug->Obim();
echo "\n";
echo $krug->Povrsina();
echo "\n";
$tr=new \tela\Trougao(3,4,5);
echo $tr->Obim();
echo "\n";
echo $tr->Povrsina();
echo "\n";
$prav=new \tela\Pravougaonik(4,3);
echo $prav->Obim();
echo "\n";
echo $prav->Povrsina();
$prav=new \tela\Pravougaonik(4,3);
echo "\n";
echo $prav->Obim();
echo "\n";
echo $prav->Povrsina();
echo "\n";
$sa= new \tela\Mnogougao(8,6,6,6,6,6,6,6);
echo $sa->Obim();
echo "\n";
echo $sa->Povrsina();
?>