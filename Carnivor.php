<?php
require_once "Animal.php";

class Carnivor extends Animal
{
    public function __construct(string $nom, string $espece)
    {
        parent::__construct($nom, $espece, "Carnivor");
    }
}
