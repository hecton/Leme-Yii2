<?php

namespace app\controllers;

use yii\base\Controller;

class WelcomeController extends Controller
{
    public $layout = 'nothing';
    
    public function actionIndex()
    {
        return $this->render('index', [
            'message' => 'Olá'
        ]);
    }
}

