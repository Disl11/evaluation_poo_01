<?php
require_once "Animal.php";
require_once "Visiteur.php";
require_once "Carnivor.php";
require_once "Herbivor.php";
require_once  "Zoo.php";

$zoo = new Zoo();



$zoo->animaux[] = new Carnivor("Rexy", "lion");
$zoo->animaux[] = new Herbivor("Bambi", "cerf");


$visiteur1 = new Visiteur("Loic");
$visiteur2 = new Visiteur("Yassine");
$visiteur3 = new Visiteur("Enzo");
$visiteur4 = new Visiteur("Pierre");
$visiteur5 = new Visiteur("Yannick");


//vente billet
echo $zoo->venteBillet($visiteur1);
echo $zoo->venteBillet($visiteur2);
echo $zoo->venteBillet($visiteur3);



echo $zoo->ouvirLesPorte();
