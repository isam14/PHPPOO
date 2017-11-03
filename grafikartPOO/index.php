<?php
require_once('Personnage.php');

$merlin = new Personnage('Merlin');
var_dump($merlin->crier());
// return $merlin->crier();

$merlin->regenerer();
var_dump($merlin);

$harry = new Personnage('Harry');
$harry->vie = 50;
var_dump($harry->mort()); //false si vivant et true si mort
$harry->regenerer();
var_dump($harry);