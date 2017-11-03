<?php


//$this-> représente l'objet Voiture
class Voiture{
    private $contenuReservoir;
    private $indicateurReserveRouge;
//Methode
public function addContenuReservoir ($contenu) {
    $this->contenuReservoir+= $contenu;
    if ($this->contenuReservoir<20) {
        $this->indicateurReserveRouge = true;
    }else 
    $this->indicateurReserveRouge =false;
    
    return $this->contenuReservoir;
}
}


$uneVoiture = new Voiture;
echo $uneVoiture->contenuReservoir();
