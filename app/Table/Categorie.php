<?php
namespace App\Table;

use App\App;

class Categorie
{
    private static $table = "Categories";

    public static function getAll()
    {
        return App::getDB()->query("
        SELECT *
        FROM ".self::$table,__CLASS__);
    }
}
?>