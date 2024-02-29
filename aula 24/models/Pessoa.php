<?php 

namespace app\models;

use yii\db\ActiveRecord;

class Pessoa extends ActiveRecord
{
    // public $nome;
    // public $email;
    // public $idade;

    public static function tableName()
    {
        return "pessoas";
    }

    public function attributeLabels()
    {
        return [
            'email' => 'E-mail'
        ];
    }

    public function rules()
    {
        return [
            [['nome', 'email'], 'required'],
            [['email'],'email'],
            [['idade'], 'integer', 'max' => 150],
        ];
    }
}