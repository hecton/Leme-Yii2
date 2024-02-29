<?php 

namespace app\controllers;

use app\models\Cargo;
use app\models\Pessoa;
use yii\web\Controller;
use app\models\Funcionario;
use app\models\Programador;
use app\models\PessoaFisica;

class RelationController extends Controller
{
    public function actionCargos()
    {
        $cargos = Cargo::find()->all();
        
        // dd($cargos[0]->funcionarios);

        foreach ($cargos as $cargo) {
            echo '<p id="'. $cargo->id .'">'. $cargo->nome .'</p>';
            echo '<ul>';
            foreach ($cargo->funcionarios as $funcionario) {
                echo '<li id="'. $funcionario->id .'">'. $funcionario->nome .'</li>';
            }
            echo '</ul>';
        }
    }

    
    public function actionFuncionarios()
    {
        $funcionarios = Funcionario::find()->all();
        foreach ($funcionarios as $funcionario) {
            echo '<p id="'. $funcionario->id .'">'. $funcionario->nome .' - '. $funcionario->cargo->nome .'</p>';
        }
    }
    
    public function actionPessoas()
    {
        $pessoas = Pessoa::find()->all();
        
        foreach ($pessoas as $pessoa) {
            echo '<p id="'. $pessoa->id .'">'. $pessoa->nome .' - '. $pessoa->pessoaFisica->cpf .'</p>';
        }
    }

    public function actionPessoasFisica()
    {
        $pfs = PessoaFisica::find()->all();

        
        foreach ($pfs as $pf) {
            echo '<p id="'. $pf->pessoa_id .'">'. $pf->pessoa->nome .' - '. $pf->cpf .'</p>';
        }
    }

    public function actionProgramador()
    {
        $programadores = Programador::find()->all();

        foreach ($programadores as $programador) {
            echo '<p>'.$programador->id.' - '.$programador->nome.' - '.$programador->github.'</p>';

            foreach($programador->linguagens as $linguagem)
            {
                echo '<li>'. $linguagem->id.' - '.$linguagem->nome .'</li>';
            }

        }
    }
}