<?php

class Zoo
{
    public array $visiteur = [];
    public array $animaux = [];

    public function venteBillet(Visiteur $visiteur)
    {
        $visiteur->aBillet = true;
        $this->visiteur[] = $visiteur;
    }

    public function ouvirLesPorte()
    {

        $ouvrirZoo = "Ouverture du zoo ! <br>";

        foreach ($this->visiteur as $visiteur) {

            if ($visiteur->aBillet) {

                foreach ($this->animaux as $animal) {
                    $ouvrirZoo .= $animal->faireLeShow();
                }

                $ouvrirZoo .= $visiteur->nom . " peu entre dans le zoo <br>";
            } else {
                $ouvrirZoo .= $visiteur->nom . " peu pas entree dans le zoo <br>";
            }
        }
        return $ouvrirZoo;
    }
}
