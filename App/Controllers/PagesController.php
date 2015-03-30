<?php


namespace App\Controllers;


class PagesController extends AppController
{

    // Ici on y a accès via l'url ../pages/index (ou juste / puisque c'est par défaut)
    public function index()
    {
        $this->view = 'index';
    }

    // On créer une fonction public avec le même nom que la page qu'on veut on aura accès à cette page avec l'url .../pages/articles
    public function articles()
    {
        // On charge le model dont on a besoin ici je veux récupérer des articles donc je charges articles
        $this->loadModel('Article');

        // ça me donne accès à $this->Article qui est le model (App/Models/Article.php) dedans y a une méthode getLast
        $posts = $this->Article->getLast();

        // J'indique que la vue à afficher est la page articles.php (pas besoin de mettre .php)
        $this->view = "articles";

        // J'envoi la variables posts à la vue
        return compact("posts");
    }


    /**
     *
     * AVANT D'AJOUTER UNE PAGE IL FAUT AJOUTER LA ROUTE
     * DANS LE FICHIER App/Configs/routes.php
     *
     * On créer un fichier model par entité dans la base de données (donc par table)
     * voir App/Models/Article.php
     */
} 