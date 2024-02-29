<?php 
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Adicionar pessoa'
?>

<h1><?= Html::encode($this->title)?></h1>

<div class="card">
    <?php $form = ActiveForm::begin() ?>
    <div class="card-body">
        <?= $form->field($model, 'nome')?>
        <?= $form->field($model, 'pessoaFile')->fileInput()?>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end() ?>
</div>