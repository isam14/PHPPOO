<?php

class Personnage
{
    public $vie = 80;
    public $atk = 20;
    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function crier(){
        echo 'leeroy jenkins';
    }

    public function mort(){
        return $this->vie <= 0;
    }

    public function regenerer(){
        $this->vie = 100;
    }
    
}