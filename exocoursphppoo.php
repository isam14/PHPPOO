<?php
// la class correspond plus à l'usine
class Voiture {
// attributs/propriete = variable
private $__capaciteReservoir;
private $__moteur;
private $__freins;

public $volant;
public $roues;

// methode
private function __injecter() {

}
public function freiner() {


}

}

// pour créer l'objet on instancie l'objet à partir de sa class 

$uneVoiture = new Voiture;

// acces aux proprietes et methodes
// en theorie ça devrait etre comme ça (la fleche sert à acceder aux proprietes/attributs Voiture )
echo $uneVoiture->$__capaciteReservoir;

// mais comme l'attribut est private on peut pas il faut passer par la méthode
$uneVoiture->accelerer();
$uneVoiture->$reservoir = 60;


