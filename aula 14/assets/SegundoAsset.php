<?php

namespace app\assets;

use yii\web\AssetBundle;

class SegundoAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/files';

    public $css = [
        'estilo1.css'
    ];

    public $js = [
        'logica.js'
    ];

    public $depends = [
        'app\assets\PrimeiroAsset',
        'app\assets\FontWeasomeAseet',
        'app\assets\GoogleFontAsset',
    ];
}