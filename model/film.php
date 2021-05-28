<?php
class Film
{
    // Attributs
    private $title;
    private $startYear;
    private $runtimeMinutes;

    //Methodes
    /**
     * @param string $title
     * @param int $startYear
     * @param int $runtimeMinutes
     */
    public function __construct(string $title,int $startYear,int $runtimeMinutes)
    {
        $this->title = $title;
        $this->startYear = $startYear;
        $this->runtimeMinutes = $runtimeMinutes;
     }


    public function showTitle()
    {
        echo $this->title;
    }
    public function showYear()
    {
        echo $this->startYear;
    }
    public function showDuration()
    {
        $minutes = ($this->runtimeMinutes) % 60;
        $hours = floor(($this->runtimeMinutes) / 60);
        if ($minutes == 0) {
            echo ("Ce film dure $hours h");
        } else {
            echo ("Ce film dure $hours h et $minutes min");
        }
    }
}