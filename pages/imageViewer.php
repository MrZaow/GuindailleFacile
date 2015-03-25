<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 10/03/15
 * Time: 20:18
 */

//header("Content-type: image/png");
foreach(App::getDB()->query("SELECT image1 FROM Boissons", "") as $photo)
{
    echo $photo;
}

;

?>