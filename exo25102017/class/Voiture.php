<?php

class Voiture
{
    //constantes et variables de classe
    const CAPACITE_RESERVOIR=60;
    public static $nbVoiture=0;
    //propriétés
    private $reservoir;
    
    public function __construct(){
        self::$nbVoiture++;
    }
    
    
    
}
