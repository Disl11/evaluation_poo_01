<?php

class Visiteur
{

    public string $nom;
    public bool $aBillet = false;


    public function __construct(string $nom = "incconue")
    {
        $this->nom = $nom;
    }

    public function afficherVisiteur()
    {
        return "Nom visiteur : " . $this->nom . "<br>";
    }
}
