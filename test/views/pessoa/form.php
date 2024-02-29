<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
?>

<h1>Cadastro</h1>

<div class="card">
    <?php $form = ActiveForm::begin() ?>
    <div class="card-body">
        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'idade') ?>
    </div>

    <div class="card-footer">
        <?= Html::submitButton('salvar', ['class' => ['btn' => 'btn btn-primary']])?>
    </div>
    <?php ActiveForm::end() ?>
</div>