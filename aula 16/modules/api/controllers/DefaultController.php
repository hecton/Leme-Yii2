<?php

namespace app\modules\api\controllers;

use app\models\News;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    public $modelClass = 'app\models\News';

    public function actions()
    {
        $actions = parent::actions();

        unset($actions['create'], $actions['delete']);

        return $actions;
    }

   
}
