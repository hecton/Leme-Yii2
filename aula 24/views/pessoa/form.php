<?php 
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<h1>Formulário de pessoa</h1>

<div class="card">
    <?php $form = ActiveForm::begin()?>
    <div class="card-body">
        <?= $form->field($model, 'nome'); ?>
        <?= $form->field($model, 'email'); ?>
        <?= $form->field($model, 'idade'); ?>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end()?>
</div>