<?php
//nous créons une classe "Personnage"
class Personnage {
    private $localisation = 'Lyon';
    private $force = 0;
    private $experience = 0;
    private $degats = 0;
    // nous allons écrire une méthode gagnerExperience() pour augmenter de 1 l'expérience du personnage:
    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->degats += $this->force;
    }
    public function gagnerExperience()
    {
        // Ceci est un raccourci qui équivaut à écrire « $this->_experience = $this->_experience + 1 »
        // On aurait aussi pu écrire « $this->_experience += 1 »
        $this->experience++;

    }
    public function afficherExperience()
    {
        echo $this->experience;
    }

    //nous déclarons une méthode dont le seul but est d'afficher un texte
    public function parler()
    {
        echo 'Je suis un personnage !<br>';
    }
    public function deplacer()
    {

    }
    //Mutateur chargé de modifier l'attribut $force
    public function setForce($force)
    {
        if(!is_int($force)) //s'il ne s'agit pas d'un nb entier
        {
            trigger_error('La force d\'un personnage doit etre un nb entier', E_USER_WARNING);
            return;
        }
        if($force > 100)// On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('la force d\'un perso ne peut depasser 100', E_USER_WARNING);
            return;
        }
        $this->force = $force;
    }
    public function setExperience()
    {
        if(!is_int($experience))
        {
            trigger_error('l\'experience d\'un perso doit etre un nombre entier', E_USER_WARNING);
            return;
        }
        if($experience>100)
        {
            trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this->experience = $experience;
    }


    // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
    public function getForce()
    {
        return $this->force;
    }
    // Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
    public function getExperience()
    {
        return $this->experience;
    }
    // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
    public function getDegats()
    {
        return $this->degats;
    }
}

$perso = new Personnage;
$perso->parler();
$perso->gagnerExperience();
$perso->afficherExperience();
var_dump($perso);

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->setForce(10);
$perso1->setExperience(2);

$perso2->setForce(90);
$perso2->setExperience(58);

$perso1->frapper($perso2);
$perso1->gagnerExperience();
var_dump($perso1);
var_dump($perso2);

$perso2->frapper($perso1);
$perso2->gagnerExperience();

echo '<br> Le personnage 1 a ', $perso1->getForce(), ' de force, contrairement au personnage 2 qui a ', $perso2->getForce(), ' de force.<br />';

echo 'Le personnage 1 a ', $perso1->getExperience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->getExperience(), ' d\'expérience.<br />';

echo 'Le personnage 1 a ', $perso1->getDegats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->getDegats(), ' de dégâts.<br />';