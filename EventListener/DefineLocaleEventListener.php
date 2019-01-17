<?php

namespace PhpBenchmarksYiiRest\EventListener;

/**
 * Event listener for modifying the locale
 * @author jcheron <myaddressmail@gmail.com>
 *
 */
class DefineLocaleEventListener {
    const EVENT_NAME = 'defineLocale';

    public static function defineLocale(){
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $locale = $locales[rand(0, 2)];
        \Yii::$app->language=$locale;
    }
}
