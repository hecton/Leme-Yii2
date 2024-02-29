<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use app\classes\filters\ExecutionTimeFilter;

class FiltrosController extends Controller
{
    public function behaviors(): array
    {
        return [
            'tempoacao' => [
                'class' => ExecutionTimeFilter::className(),
            ],
            'access' => [
                'class'=> AccessControl::className(),
                'only' => ['create'],
                'rules' => [
                    [ 'allow' => false ]
                ]
            ]
        ];
    }

    public function actionIndex(): string
    {
        return $this->render("index");
    }

    public function actionCreate(): string
    {
        return 'create';
    }
}