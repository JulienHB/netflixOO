<?php require_once('controller/acteurList.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un acteur</title>
</head>
<body>
    <?php include('view/inc/nav.php'); ?> 
    
    <hr>
<form action="index.php?action=addActeur" method="post">
    <p>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" />
    </p>
    <p>
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" />
    </p>
    <p>
        <label for="dateOfBirth">Date de naissance</label>
        <input type="date" name="dateOfBirth" />
    </p>
    <p>
        <label for="dateOfDeath">Date de décés</label>
        <input type="date" name="dateOfDeath" />
    </p>
    <p>
        <input type="submit" name="creationActeur" value="Créer un acteur" />
    </p>
</form>
<br>
<hr>
<?php if (!empty($_POST)){?>
    <h1><?php echo $_POST['firstname']?> <?php echo $_POST['lastname']?></h1>
    
    <p><?php $acteur->isDeath(); ?></p><?php
}
?>
    
</body>
</html>



