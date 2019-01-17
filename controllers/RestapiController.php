<?php

namespace PhpBenchmarksYiiRest\controllers;

use yii\web\Controller;
use PhpBenchmarksYiiRest\EventListener\DefineLocaleEventListener;

class RestapiController extends Controller
{
 
    /**
     *
     * @return string
     */
    public function actionIndex()
    {
    	\Yii::$app->on(DefineLocaleEventListener::EVENT_NAME, function(){DefineLocaleEventListener::defineLocale();});
    	\Yii::$app->trigger(DefineLocaleEventListener::EVENT_NAME);
    	//\Yii::$app->language="fr_FR";
    	return "rest ".\Yii::t("phpbenchmarks", "translated.2");
    }
}
