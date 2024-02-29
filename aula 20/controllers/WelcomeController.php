<?php

namespace app\controllers;

use yii\web\Controller;

class WelcomeController extends Controller
{
    public function actionIndex($message)
    {
        return $message;
    }
}