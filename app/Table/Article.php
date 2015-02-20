<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 17/02/15
 * Time: 20:45
 */
namespace App\Table;
use App\App;


class Article
{
    public static function getLast()
    {

        return App::getDB()->query("
        SELECT Articles.id, Articles.titre,Articles.date,Articles.auteur, Articles.contenu, Categories.titre as categorie
        FROM Articles
        LEFT JOIN Categories
          ON category_id = Categories.id
        ORDER BY date DESC", __CLASS__);
    }
    /**
     * Fonction magique
     * @param $param
     * @return mixed
     */
    public function __get($param)
    {

        $method = 'get' . ucfirst($param);

        $this->$param = $this->$method();

        return $this->$param;
    }

    public function getURL()
    {
        return 'index.php?p=article&id='.$this->id;
    }
    public function getTitre()
    {
        return '<h2><a href="'.$this->URL.'">'.$this->titre.'</a></h2>';
    }
    public function getExtrait()
    {
        $html = '<p>'.substr($this->contenu, 0, 340).'...<p>';
        $html .= '<a class="button-third" href="'.$this->getURL().'">En savoir plus</a>';
        return $html;
    }
    public function getContenu()
    {
        return '<p>'.$this->contenu.'</p>';
    }
    public function getDate()
    {
        $date = new \DateTime($this->date);
        $html = '<div class="post-date"><p><span>'.$date->format('d').'</span>'.$date->format('M').'</p></div>';
        return $html;
    }
    public function getAuteur()
    {
        return '<p>Par: '.$this->auteur.'</p>';
    }
    public static function getPopular()
    {
        return App::getDB()->query("SELECT * FROM Articles ORDER BY popularite DESC LIMIT 3", __CLASS__);
    }
}