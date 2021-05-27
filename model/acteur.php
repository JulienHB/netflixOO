<?php
class Acteur
{
    // Attributs
    private $firstname;
    private $lastname;
    private $dateOfBirth;

    //Methodes
    public function createActeur($firstname, $lastname, $dateOfBirth)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
    }
}
