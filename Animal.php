<?php


class Animal
{
    public string $nom;
    public string $espece;
    public string $regime;

    public bool $donneNaissance = false;

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
            " qui s'appelle " . $this->nom . " fait  le show <br>";
    }

    public function donnerNaissance()
    {
        if ($this->donneNaissance) {
            return $this->nom . " a donner naissance <br>";
        } else {
            return $this->nom . " a pas donner naissance <br>";
        }
    }
}
