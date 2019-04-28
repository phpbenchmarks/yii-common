<?php

namespace PhpBenchmarksYiiHello\controllers;

use yii\web\Controller;

class HelloworldController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return "Hello World !";
    }
}
