<?php

class Zoo
{
    public array $visiteur = [];

    public function venteBillet(Visiteur $visiteur)
    {
        $visiteur->aBillet = true;
        $this->visiteur[] = $visiteur;
    }
    public function livraison() {}
    public function naissance() {}

    public function ouvirLesPorte(Visiteur $visiteur)
    {

        if ($visiteur->aBillet) {
            return $visiteur->nom . " peu entre dans le zoo <br>";
        } else {
            return $visiteur->nom . " peu pas entree dans le zoo <br>";
        }
    }
}
