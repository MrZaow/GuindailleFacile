<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 10/03/15
 * Time: 17:55
 */

namespace App\Table;

use App\App;

class biere
{
    public function __get($param)
    {

        $method = 'get' . ucfirst($param);

        $this->$param = $this->$method();

        return $this->$param;
    }
    public function getPhoto1()
    {
        return base64_encode($this->photo1);
    }
    static function getAll()
    {
        return App::getDB()->query("SELECT *
                                    FROM bieres AS b INNER JOIN ingredients AS i
                                    ON b.idingredient = i .idingredient
                                    INNER JOIN boissons AS b2
                                    ON b.idingredient = b2.idingredient", __CLASS__);
    }
}