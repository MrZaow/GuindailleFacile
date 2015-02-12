<?php
    require '../app/Autoloader.php'; //Charge l'autoloader pour les futures class

    App\Autoloader::register(); //

    if (isset($_GET['p'])) //On récupére la variable ?p=...
        $p = $_GET['p'];
    else
        $p = "home";

    ob_start(); //on va enregistrer tout ce qui va etre affiché à partir de maintenant

    if($p === "home")
        require '../pages/home.php';
    elseif($p === "biere")
        require '../pages/biere.php';

    $content = ob_get_clean(); //On met tout dans la variable content et on nettoie l'écran

    require '../pages/template/template.php'; //et on affiche le canva de base
?>