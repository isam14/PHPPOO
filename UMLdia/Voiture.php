<?php

require_once("Vehicule.php");

class Voiture extends Vehicule  
{
	
	private $reservoir;
	private $indicReservoirRouge;
	private $kilometrage;
	private $consommation;

	
	public function __construct($type,$couleur,$reservoir){
		echo "debut constructeur voiture<br>";
		parent::__construct($couleur);
		$this->type = $type;
		$this->reservoir = $reservoir;
		echo "fin constructeur voiture<br>";
		$this->kilometrage = 130;
		$this->setCouleur('noire');
		$this->setNom('Megane');
		$this->setNbRou(4);

	}
	
	// public function getReservoir() {
	// 	return $this->reservoir;
	// }
	// public function setReservoir($reservoir) {
	// 	$this->reservoir = $reservoir;
	// 	return $this;
	// }
	public function getKilometrage(){
		return $this->kilometrage;
	}
	public function setKilometrage($kilometrage){
		$this->kilometrage = $kilometrage;
		return $this;
	}
	public function setConsommation($consommation){
		$this->consommation = $consommation;
		return $this;
	}
	// public function getPasserVitesse(){
	// 	return $this->passerVitesse;
	// }
	// public function setpasserVitesse($passerVitesse){
	// 	$this->passerVitesse = $passerVitesse;
	// 	return $this;
	// }
	public function demarrerMoteur(){
		echo'je demarre le moteur<br>';
	}
	public function eteindreMoteur(){
		echo "j'eteinds le moteur<br>"; 
	}
	public function passerVitesse($numeroVitesse){
		$this->numeroVitesse = $numeroVitesse;
		echo "je passe la 1ere<br>";
	}
	
	public function debrayer(){
		echo "je debraye<br>";
	}
	public function embrayer(){
		echo "j'embraye<br>";
	}
	public function avancer() {
		echo "ma voiture avance<br>";
	}
}


