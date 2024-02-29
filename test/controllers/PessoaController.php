<?php 

namespace app\controllers;

use app\models\Pessoa;
use yii\web\Controller;

class PessoaController extends Controller
{
    public function actionForm()
    {
        $post = \Yii::$app->request->post();
        $model = new Pessoa();

        if($model->load($post) && $model->validate()) {
            $model->save();
        }

        return $this->render("form", [
            'model' => $model
        ]);
    }

    // public function 
}