<?php
    require '../app/Autoloader.php';

    App\Autoloader::register();

    if (isset($_GET['p']) && !empty($_GET['p']))
        $p = $_GET['p'];
    else
        $p = "home";


    ob_start();

    if(file_exists("../pages/".$p.".php"))
        require '../pages/'.$p.'.php';

    else
    {
        require '../pages/404.php';
        http_response_code(404);
    }
    $content = ob_get_clean();

    require '../pages/template/template.php';

?>