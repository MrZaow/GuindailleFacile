<?php
    require '../app/Autoloader.php'; //Charge l'autoloader pour les futures class

    App\Autoloader::register(); //

    if (isset($_GET['p']) && !empty($_GET['p'])) //On récupére la variable qui se trouve dans l'url...
        $p = $_GET['p'];
    else
        $p = "home";


    ob_start(); //on va enregistrer tout ce qui va etre affiché à partir de maintenant

    if(file_exists("../pages/".$p.".php"))
        require '../pages/'.$p.'.php';

    else
    {
        require '../pages/404.php';
        http_response_code(404);
    }
    $content = ob_get_clean(); //On met tout dans la variable content et on nettoie l'écran

    require '../pages/template/template.php'; //et on affiche le canvas de base

?>