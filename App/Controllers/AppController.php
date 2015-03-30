<?php


namespace App\Controllers;

use Core\Controller;

class AppController extends Controller
{
    public function loadModel($modelName)
    {
        $model = 'App\\Models\\' . $modelName;
        $this->$modelName = new $model();
    }
} 