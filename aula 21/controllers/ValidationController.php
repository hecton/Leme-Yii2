<?php

namespace app\controllers;

use yii\web\Controller;

class ValidationController extends Controller
{
    public function actionForm()
    {
        return $this->render("form");
    }
}