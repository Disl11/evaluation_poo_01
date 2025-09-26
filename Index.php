<?php
require_once "Animal.php";
require_once "Visiteur.php";
require_once "Carnivor.php";

$animal1 = new Carnivor("rex", "lion");
echo $animal1->faireLeShow();



$visiteur1 = new Visiteur("Loic");
echo $visiteur1->afficherVisiteur();
