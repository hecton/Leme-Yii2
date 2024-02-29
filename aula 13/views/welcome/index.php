<?php
/** @var yii\web\View $this */

// use app\assets\PrimeiroAsset;
use app\assets\SegundoAsset;
use yii\helpers\Html;

// PrimeiroAsset::register($this);
SegundoAsset::register($this);
?>
<div class="row">
    <div class="col-6 offset-3" id="aqui">
        <h1><?= Html::encode($message) ?></h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maiores ut praesentium quam error aliquid debitis laboriosam cupiditate nihil, rem eos fuga iste recusandae temporibus et laborum nulla molestiae expedita!
        </p>
        <i class="icon-camera-retro"></i>
        
    </div>
</div>