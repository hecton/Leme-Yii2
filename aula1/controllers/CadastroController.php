<?php

namespace app\controllers;

use app\models\CadastroModel;
use app\models\Pessoas;
use yii\base\Controller;
use Yii;
use yii\data\Pagination;

class CadastroController extends Controller
{
    public function  actionFormulario()
    {
        $model = new CadastroModel();
        $post = Yii::$app->request->post();

        if($model->load($post) && $model->validate())
        {
            return $this->render('mostrar-dados', [
                'model' => $model
            ]);
        }

        return $this->render('formulario', [
            'model'=> $model,
        ]);
    }

    public function  actionMostrarDados()
    {
        return $this->render('mostrar-dados');
    }

    public function actionPessoas()
    {
        $pessoasQuery = Pessoas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $pessoasQuery->count(),
        ]);

        $pessoas = $pessoasQuery->orderBy('nome')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('pessoas', [ 
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);   
    }


}