<?php

require_once('Voiture.php');
require_once('Velo.php');

$voiture = new Voiture('bleu', 90);
$voiture->setKilometrage(100);
$voiture->setConsommation(10);
$voiture->embrayer();
$voiture->passerVitesse(5);
$voiture->debrayer();
$voiture->avancer();


$velo = new Velo('gel', 'huilée', 'bleu');
$velo->pedaler('il pedale comme un fou ');

$tabVehicule = [
    new Voiture('P306'),
    new Voiture('DS'),
    new Voiture('Megane'),
    new Velo('VTT'),
    new Velo('VeloCourse')
];

foreach ($tabVehicule as $voiture) {
    $voiture->avancer();
}

// foreach ($tabVehicule as $velo) {
    //     $velo->avancer();
    // }
    
    var_dump($voiture, $velo, $tabVehicule);
    
    