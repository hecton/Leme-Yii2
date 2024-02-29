<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>

<h1>Formulário teste</h1>

<div class="card">
    <?php $form = ActiveForm::begin()?>
    <div class="card-body">
        <?= $form->field($model, 'nome'); ?>
        <?= $form->field($model, 'email');?>
        <?= $form->field($model, 'data_nascimento'); ?>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end() ?>
</div>