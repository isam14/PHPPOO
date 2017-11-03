<?php
class Voiture
{
    const INDICATEUR_ROUGE=10;

    private $reservoir;
    private $indicReservoirRouge;
    

    public function __construct() {
        $this->setReservoir(0);
        
    }
    
    public function setReservoir($reservoir) {
        $this->reservoir = $reservoir;
        if($reservoir < self::INDICATEUR_ROUGE) {
            $this->indicReservoirRouge = true;
        }else{
            $this->indicReservoirRouge = false;
        }
    }
    public function displayTableauDeBord(){
        
        if($this->indicReservoirRouge){
            echo "Voici l'affichage de l'indicateur de reserve: rouge";
                
            }else{
                echo "Voici l'affichage de l'indicateur de reserve: vert";
                         }
    }

   
}

$maVoiture = new Voiture();
$maVoiture->setReservoir(5);
$maVoiture->displayTableauDeBord();