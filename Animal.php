<?php


class Animal
{
    public string $nom;
    public string $espece;
    public string $regime;

    public function __construct(string $nom = "inconue", string $espece = "inconue", string $regime = "inconue")
    {
        $this->nom = $nom;
        $this->espece = $espece;
        $this->regime = $regime;
    }


    public function faireLeShow()
    {
        return "Cet animal " . $this->regime .
            " qui est un  " . $this->espece .
            " qui s'appelle " . $this->nom . "<br>";
    }

    public function DonnerNaissance() {}
}
