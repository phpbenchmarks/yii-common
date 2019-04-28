<?php

namespace PhpBenchmarksYiiRest\controllers;

use yii\web\Controller;
use PhpBenchmarksYiiRest\EventListener\DefineLocaleEventListener;
use PhpBenchmarksYiiRest\services\Users;

class RestapiController extends Controller
{
    /** @return \yii\web\Response */
    public function actionIndex()
    {
        \Yii::$app->on(
            DefineLocaleEventListener::EVENT_NAME,
            function () {
                DefineLocaleEventListener::defineLocale();
            }
        );
        \Yii::$app->trigger(DefineLocaleEventListener::EVENT_NAME);

        return $this->asJson(
            (new Users())->serialize()
        );
    }
}
