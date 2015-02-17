<?php
/**
 * Created by PhpStorm.
 * User: Florent
 * Date: 17/02/15
 * Time: 20:07
 */
namespace App;
use \PDO; 

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    /**
     * @param $db_name
     * @param string $db_user
     * @param string $db_pass
     * @param string $db_host
     */
    public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost')
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_pass = $db_pass;
        $this->db_user = $db_user;
    }

    private function getPDO()
    {
        if ($this->pdo === null)
        {
            $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host , $this->db_user, $this->db_pass,  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;

    }

    public function query($statement, $class_name = null)
    {
        $req = $this->getPDO()->query($statement);

        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

        return $datas;
    }

    public function prepare ($statement, $attributes, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one)
        {
            $datas = $req->fetch();
        }
        else
        {
            $datas = $req->fetchAll();
        }
        return $datas;
    }
}