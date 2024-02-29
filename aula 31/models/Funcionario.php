<?php 

namespace app\models;

use yii\db\ActiveRecord;

class Funcionario extends ActiveRecord
{
    public static function tableName()
    {
        return 'funcionarios';
    }

    public function rules()
    {
        return [
            [['nome', 'cargo_id'], 'required'],
            ['nome', 'string', 'max' => 60],
        ];
    }

    public function getCargo()
    {
        return $this->hasOne(Cargo::class, ['id'=> 'cargo_id']);
    }

    
}