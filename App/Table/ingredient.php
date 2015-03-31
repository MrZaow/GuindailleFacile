<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 10/03/15
 * Time: 17:46
 */

namespace App\Table;

use App\App;

class ingredient
{
    static function getall()
    {
        return App::getDB()->query("SELECT * FROM ingredients");
    }

}