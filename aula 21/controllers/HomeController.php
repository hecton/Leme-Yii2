<?php

namespace app\controllers;

use Yii;
use app\models\Pessoa;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $data = [
            ['nome' => 'hecton aparecido'],
            ['nome' => 'ryan teste'],
            ['nome' => 'everson emil'],
            ['nome' => 'keber matheus'],
        ];

        Yii::$app->db
            ->createCommand()
            ->batchInsert(Pessoa::tableName(), ['nome'], $data)
            ->execute();

        $pessoas = Pessoa::find()->all();

        dd($pessoas);
        // $pessoas

        // return $pessoas;
    }
}