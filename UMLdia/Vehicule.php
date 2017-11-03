<?php


abstract class Vehicule {
	
	private $couleur;
	private $nbRoues;
	private $etatDeMarche;
	private $poids;
	protected $vitesse;
	private $marque;
	
	public function __construct($couleur) {
		echo "debut constructeur vehicule<br>";
		$this->couleur = $couleur;
		echo "fin constructeur vehicule<br>";
	}
	
	public function setCouleur($couleur){
		$this->couleur = $couleur;
	}
	public function setNbRou($nbRoues){
		$this->nbRoues = $nbRoues;
	}
	public function setNom($marque){
		$this->marque = $marque;
	}
	
	public function setReservoir($reservoir) {
		$this->reservoir = $reservoir;
		
	}
	abstract public function avancer();
	
	

}

