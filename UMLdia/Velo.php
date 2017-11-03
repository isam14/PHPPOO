<?php

require_once("Vehicule.php");

class Velo extends Vehicule
{
    private $selle;
    private $chaine;

    public function __construct($type, $chaine, $couleur){
        parent::__construct($couleur);
        $this->type = $type;
        $this->selle = $selle;
        $this->chaine = $chaine;
    }

    public function pedaler() {
        echo "il pedale comme un fou avec sa selle en gel et sa chaine bien huilée!!!!<br>";

    }
    public function avancer() {
		echo "mon velo avance<br>";
	}

    
}
