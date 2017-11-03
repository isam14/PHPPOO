<!-- testVoiture.php est le client de la class Voiture -->
<?php

include("class/Voiture.php");
echo Voiture::CAPACITE_RESERVOIR.'<br>';

// :: c'est un operateur de resolution de portée, il est utilisé pour appeler des éléments appartenant à telle classe et non à tel objet
echo Voiture::$nbVoiture . '<br>';
$V = new Voiture();
echo Voiture::$nbVoiture;


