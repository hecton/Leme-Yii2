<?php 

namespace app\controllers;

use Yii;
use app\models\Pessoa;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class PessoaController extends Controller
{
    public function actionForm()
    {
       $model = new Pessoa();

        if($this->request->isPost){
            if($model->load($this->request->post()) && $model->validate()){
                $model->save();
            }
        }

        return $this->render("form", [ 'model' => $model ]);
    }

    public function actionAll()
    {
        $query = Pessoa::find();
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3,
            ],
            'sort' => [
                'defaultOrder' => ['nome' => SORT_ASC]
                ]
        ]);
            // dd($dataProvider->query->all());

        return $this->render('all', [
            'dataProvider' => $dataProvider
        ]);
    }
}