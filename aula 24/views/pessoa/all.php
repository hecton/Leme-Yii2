<?php

use yii\grid\GridView;
?>
<h1>Todas as pessoas</h1>

<div class="row">
    <div class="col-12">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'attribute' => 'id',
                    'header' => 'Cod.',
                    'headerOptions' => [
                        'style' => 'color: red;'

                    ]
                ],
                'nome',
                'email',
                'idade'
            ]    
        ]); ?>
    </div>
</div>