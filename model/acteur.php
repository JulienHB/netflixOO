<?php
class Acteur
{
    // Attributs
    private $firstname = 'Mark';
    private $lastname = 'Hamill';
    private $dateOfBirth = 1951;

    //Methodes
    public function createActeur($firstname,$lastname,$dateOfBirth){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
    }

}