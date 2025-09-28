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


    public function livraison() {}

    public function ouvirLesPorte()
    {

        $ouvrirZoo = "Ouverture du zoo ! <br>";

        foreach ($this->visiteur as $visiteur) {

            if ($visiteur->aBillet) {

                $ouvrirZoo .= $visiteur->nom . " peu entre dans le zoo <br>";

                foreach ($this->animaux as $animal) {
                    $ouvrirZoo .= $animal->faireLeShow();
                }
            } else {
                $ouvrirZoo .= $visiteur->nom . " peu pas entree dans le zoo <br>";
            }
        }
        return $ouvrirZoo . "Fermeture du zoo";
    }
}
