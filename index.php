<?php
require_once('model/film.php');
require_once('model/acteur.php');
require_once('controller/filmList.php');
require_once('view/filmAdd.php');
require_once('view/acteurAdd.php');


if (!empty($_POST['title'])) {
    $film = new Film();
    $film->createMovie($_POST['title'], $_POST['startYear'], $_POST['runtimeMinutes']);
    var_dump($film);
}
if (!empty($_POST['firstname']) & !empty($_POST['lastname']) & !empty($_POST['dateOfBirth'])) {
    $acteur = new Acteur();
    $acteur->createActeur($_POST['firstname'], $_POST['lastname'], $_POST['dateOfBirth']);
    var_dump($acteur);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix V2 POO C'est mieux !</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">

</head>

<body id="body">
    <?php

    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--utiliser jquery-->
    <script src="js/script.js"></script>
</body>

</html>