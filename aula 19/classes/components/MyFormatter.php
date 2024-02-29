<?php

namespace app\classes\components;

use yii\i18n\Formatter;

class MyFormatter extends Formatter
{
    public static function asCpf($string): string
    {
        return $string .'cpf';
    }
}