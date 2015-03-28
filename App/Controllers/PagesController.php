<?php


namespace App\Controllers;


class PagesController extends AppController
{

    public function index()
    {
        $this->view = 'index';
        $trucs = 'model->get';
        return compact("trucs");
    }
} 