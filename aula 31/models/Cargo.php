<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $nome
 */
class Cargo extends ActiveRecord
{
    public static function tableName()
    {
        return 'cargos';
    }

    public function rules()
    {
        return [
            ['nome', 'required'],
            ['nome', 'string', 'max' => 60]
        ];
    }

    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::class, ['cargo_id' => 'id']);
    } 
}