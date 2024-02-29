<?php 

namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle
{
    public $basePath = "@webroot";
    public $baseUrl = "@web";

    public $css = [
        '\css\style.css'
    ];

    public $depends = [
        'yii\bootstrap5\BootstrapAsset'
    ];
}