<?php

namespace PhpBenchmarksYiiRest\EventListener;

/**
 * Event listener for modifying the locale
 * @author jcheron <myaddressmail@gmail.com>
 *
 */
class DefineLocaleEventListener
{
    const EVENT_NAME = 'defineLocale';

    public static function defineLocale()
    {
        // "aa_BB" should be "en" but yii don't allow to have a locale on 2 digits
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        \Yii::$app->language = $locales[rand(0, 2)];
    }
}
