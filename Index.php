<?php
require_once "Animal.php";
require_once "Visiteur.php";
require_once "Carnivor.php";
require_once  "Zoo.php";

$animal1 = new Carnivor("rexy", "lion");
echo $animal1->faireLeShow();

echo $animal1->donnerNaissance();


$visiteur1 = new Visiteur("Loic");
echo $visiteur1->afficherVisiteur();



$zoo = new Zoo();

echo $zoo->ouvirLesPorte($visiteur1);
$zoo->venteBillet($visiteur1);
echo $zoo->ouvirLesPorte($visiteur1);
