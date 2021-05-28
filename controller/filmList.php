<?php
require_once('model/film.php');
require_once('model/bdd.php');


/**
 * @return $films array
 */
function getFilms(){
    global $bdd;
    global $films;
    $req = $bdd->query('SELECT * FROM `film`');
    return $films= $req->fetchAll();
}
if (!empty($_POST['title'])) {
    $film = new Film($_POST['title'], $_POST['startYear'], $_POST['runtimeMinutes']);
}

