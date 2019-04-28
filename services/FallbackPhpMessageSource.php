<?php

namespace PhpBenchmarksYiiRest\services;

use yii\i18n\PhpMessageSource;

class FallbackPhpMessageSource extends PhpMessageSource
{
    public $fallback;

    protected function getMessageFilePath($category, $language)
    {
        // find default file
        $messageFile = parent::getMessageFilePath($category, $language);

        // look for fallbacks if no file is found
        if (file_exists($messageFile) === false) {
            if (isset($this->fallback)) {
                $messageFile = parent::getMessageFilePath($category, $this->fallback);
            } else {
                // find file based on the string before _
                $messageFile = parent::getMessageFilePath($category, substr($language, 0, strpos($language, '_')));
            }
        }

        return $messageFile;
    }
}

