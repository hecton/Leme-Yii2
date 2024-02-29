<?php

namespace app\controllers;

use Yii;
use app\models\Pessoa;
use yii\web\Controller;
use yii\web\UploadedFile;

class PessoaController extends Controller
{
    /**
     * return create pessoa form page
     * @return string
     */
    public function actionCreate(): string
    {
        $post = Yii::$app->getRequest()->post();
        $pessoa = new Pessoa();

        if($pessoa->load($post) && $pessoa->validate()){
            $pessoa->pessoaFile = UploadedFile::getInstance($pessoa, 'pessoaFile');
            $pessoa->file = $pessoa->pessoaFile->name;

        
            $pessoa->save();
            $pathname = Yii::getAlias('@webroot/files/') . $pessoa->file;
            
            $pessoa->pessoaFile->saveAs($pathname);
        }


        return $this->render("create", [
            'model' => $pessoa
        ]);
    }

    public function actionAll()
    {
        dd(Pessoa::find()->all());
    }
}