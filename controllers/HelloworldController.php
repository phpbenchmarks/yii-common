<?php

namespace PhpBenchmarksYii\HelloWorld\app\controllers;

use yii\web\Controller;

class HelloworldController extends Controller
{
 
    /**
     *
     * @return string
     */
    public function actionIndex()
    {
        return "Hello world ! ";
    }
}
