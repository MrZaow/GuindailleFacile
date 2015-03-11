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
    public function getSlider()
    {
        return '<div class="flexslider">
                    <ul class="slides">
                        <li>
                            '.$this->getPhoto(1).'
                        </li>
                        <li>
                            '.$this->getPhoto(2).'
                        </li>
                        <li>
                            '.$this->getPhoto(3).'
                        </li>
                    </ul>
                </div>';
    }
    public function getPhoto($num)
    {
        $im = "image".$num;
        return '<img src="data:image/png;base64,'.base64_encode($this->$im).'">';
    }
    public function getDescription()
    {
        return '<h1>Description </h1><p>'.$this->description.'</p>';
    }
    public function getLink()
    {
        return '?p=descriptionbiere&i='.$this->idingredient;
    }
    public function getHover()
    {
        return '<a href="'.$this->getLink().'">
                    <p>
                        <i class="fa fa-star"></i> '.$this->cotesur5.'/5<br/>
                        <i class="fa fa-glass"></i>'.$this->pourcentagealcool.'°<br/>
                        <i class="fa fa-eur"></i>'.$this->prixlitre.' euros/l<br/>
                    </p>
                </a>';
    }
    static function getAll()
    {
        return App::getDB()->query("SELECT *
                                    FROM bieres AS b INNER JOIN ingredients AS i
                                    ON b.idingredient = i .idingredient
                                    INNER JOIN boissons AS b2
                                    ON b.idingredient = b2.idingredient", __CLASS__);
    }
    static function getCategories()
    {
        return App::getDB()->query("SELECT DISTINCT type
                                    FROM bieres", __CLASS__);
    }
}