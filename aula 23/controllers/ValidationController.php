<?php

namespace app\controllers;

use app\models\ValidationForm;
use yii\web\Controller;

class ValidationController extends Controller
{
    public function actionForm()
    {
        $model = new ValidationForm();

        return $this->render("form", [
            'model' => $model
        ]);
    }
}