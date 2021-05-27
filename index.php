<?php

if(!empty($_GET)):

    switch ($_GET['action']):
        case 'listFilm' : 
            require_once('view/filmList.php');
            break;

        case 'listActeur' : 
            require_once('view/acteurList.php');
            break;

        case 'addFilm' : 
            require_once('view/filmAdd.php');
            break;

        case 'addActeur' : 
            require_once('view/acteurAdd.php');
            break;

        default :
            echo "La page que vous avez demandé n'existe pas";
            break;
    endswitch;

else :

    require_once('view/home.php');

endif;




