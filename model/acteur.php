<?php
class Acteur
{
    // Attributs
    private $firstname;
    private $lastname;
    private $dateOfBirth;
    private $dateOfDeath;
    private $age;

    
    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $dateOfBirth
     */
    public function __construct(string $firstname,string $lastname,string $dateOfBirth,string $dateOfDeath)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfDeath = $dateOfDeath;
        $this->age = $this->calculAge();
    }

    /**
     * Affiche la date de naissance de l'auteur au format dd/MM/YYY
     * 
     * @return void
     */
    public function displayBirthdate(){
  
        //1. on convertit la date en timestamp
        $timestamp = strtotime($this->dateOfBirth); //YYYY-MM-dd => timestamp

        //2. on construit notre date au format souhaité à partir du timestamp
        $dateFR = date("d/m/Y", $timestamp);

        echo $dateFR;
    }
    /**
     * @param mixed $date
     * 
     * @return [type]
     */
    public function dateFR($date){
        $timestamp = strtotime($date);
        return $dateFR = date("d/m/Y", $timestamp);
    }

    /**
     * @param mixed $date
     * 
     * @return [type]
     */
    public function anniv($date){
        $timestamp = strtotime($date);
        $anniv = date("d/m", $timestamp);
        return $anniv;
    }

    /**
     * @return [type]
     */
    public function calculAge(){
   
        if (!empty($this->dateOfDeath)){
            $date=new Datetime($this->dateOfBirth);
            $currentDate=new Datetime($this->dateOfDeath);
            $age= $currentDate->diff($date);
            return $age->format('%y');  
        }
        else{

            $date=new Datetime($this->dateOfBirth);
            $currentDate=new Datetime(date("Y-m-d"));
            $age= $currentDate->diff($date);
            return $age->format('%y'); 
        }      
    }

    /**
     * @return [type]
     */
    public function dysplayAge(){
        echo $this->age;
    }

    /**
     * @return [type]
     */
    public function isDeath(){
        if (!empty($this->dateOfDeath)){
            echo ("Malheureusement ".$this->firstname." ".$this->lastname." est décédé le ".$this->dateFR($this->dateOfDeath)." à l'age de ".$this->age." ans");
        }
        else{
            echo($this->firstname." ".$this->lastname." est toujours en vie et devrait fêter ses ".(intval($this->age)+1)." ans le ".$this->anniv($this->dateOfBirth)." prochain");
        }
    }

}
