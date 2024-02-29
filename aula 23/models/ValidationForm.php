<?php 

namespace app\models;

use yii\base\Model;

class ValidationForm extends Model
{
    public $nome;
    public $email;
    public $data_nascimento;

    public function rules()
    {
        return [
            [['nome', 'email', 'data_nascimento'], 'required'],
            ['email', 'email'],
            [['data_nascimento'], 'date', 'format'=>'yyyy-M-d'],
        ];
    }

    public function attributeLabels()
    {

        return [
            'email' => 'E-mail',
            'data_nascimento' => 'Data de nascimento'
        ];
    }
}