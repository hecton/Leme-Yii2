<?php 

namespace app\models;

use yii\db\ActiveRecord;

class Pessoa extends ActiveRecord
{
    public static function tableName()
    {
        return 'pessoas';
    }

    public function rules()
    {
        return [
            [['nome', 'email'], 'required'],
            [['email'],'email'],
            ['idade', 'integer', 'max' => 150]
        ];
    }
}