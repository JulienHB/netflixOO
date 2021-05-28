<?php 
require_once('controller/acteurList.php');
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de acteurs</title>
</head>
<body>
    <?php include('view/inc/nav.php'); ?>
    <?php var_dump($_SESSION['acteurs']);?>
 
   
</body>
</html>