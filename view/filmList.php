<?php
require_once('controller/filmList.php');
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Film</title>
</head>
<body>
    <?php include('view/inc/nav.php'); ?>
    <h1>Liste de films</h1>
    <div>
        <h2><?php ; ?></h2>
        <p>Année <?php  ; ?></p>
        <p>Durée <?php ; ?></p>
    </div>
</body>
</html>