<?php

namespace PhpBenchmarksYiiRest\controllers;

use yii\web\Controller;
use PhpBenchmarksYiiRest\EventListener\DefineLocaleEventListener;
use PhpBenchmarksYiiRest\services\Users;
use yii\helpers\Json;

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
    	$datas=(new Users())->serialize();
    	return $this->asJson($datas);
    }
    
    
}
