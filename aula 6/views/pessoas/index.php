<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Pessoas;
use yii\grid\ActionColumn;
use app\classes\widgets\HelloWidget;
use app\classes\widgets\HelloBeginEndWidget;
use app\classes\widgets\HelloRenderWidget;

/** @var yii\web\View $this */
/** @var app\models\PessoasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pessoas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= HelloWidget::widget([
        'message' => 'Olá teste',
        'submessage' => 'batata'
    ])?>
    <hr>


    <?php HelloBeginEndWidget::begin([
        'encode' => false
    ])?>
     <h1>teste</h1>
    <?php HelloBeginEndWidget::end()?>

    <hr>
        <?php HelloRenderWidget::widget([
            'message' => 'nome'
        ])?>
    <hr>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'email:email',
            'idade',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pessoas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
