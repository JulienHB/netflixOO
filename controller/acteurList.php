<?php
require_once('model/acteur.php');
require_once('model/bdd.php');

if (!empty($_POST['firstname']) & !empty($_POST['lastname']) & !empty($_POST['dateOfBirth'])) {
    $acteur = new Acteur($_POST['firstname'], $_POST['lastname'], $_POST['dateOfBirth'],$_POST['dateOfDeath']);     
}