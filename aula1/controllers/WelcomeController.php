<?php

namespace app\controllers;

use yii\web\Controller;

class WelcomeController extends Controller
{
    public function actionIndex(string $message = 'Hello World'): string
    {
        return $this->render('index', [
            'message' => $message,
        ]);
    }
}