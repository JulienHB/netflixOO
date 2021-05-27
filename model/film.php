<?php
class Film
{
    // Attributs
    private $title;
    private $startYear;
    private $runtimeMinutes;

    //Methodes
    public function showTitle(){
        echo $this->title;
    }
    public function showYear(){
        echo $this->startYear;
    }
    public function showDuration(){
       $minutes=($this->runtimeMinutes)%60;
       $hours=floor(($this->runtimeMinutes)/60);
       if ($minutes==0){
           echo ("Ce film dure $hours h");
       }
       else{
            echo ("Ce film dure $hours h et $minutes min");
       }
    }
    public function createMovie($title,$startYear,$runtimeMinutes){
        $this->title = $title;
        $this->startYear = $startYear;
        $this->runtimeMinutes = $runtimeMinutes;
    }

}