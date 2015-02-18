<?php
namespace App\Table;

use App\App;

class Categorie
{
    private static $table = "Categories";

    public static function all()
    {
        return App::getDB()->query("
        SELECT *
        FROM ".self::$table, __CLASS__);
    }
}
?>