<?php
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
?>

<div class="card">
    <div class="card-header">
        <h1>Formulário de cadastro</h1>
    </div>
    <?php $form = ActiveForm::begin() ?>        
    <div class="card-body">
        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'idade') ?>
    </div>
    
    <div class="card-footer">
        <div class="row">
            <div class="col-12">
                <?= Html::submitButton('Enviar dados', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end() ?>        
</div>
