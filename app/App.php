<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 18/02/15
 * Time: 16:13
 */
namespace App;

class App
{
    private static $database;

    const DB_NAME = 'guindaillefacile';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    public static function getDB()
    {
        if(self::$database === null)
        {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}