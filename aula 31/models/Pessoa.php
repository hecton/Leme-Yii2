<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $nome
 */
class Pessoa extends ActiveRecord
{
    public static function tableName()
    {
        return 'pessoas';
    }

    public function rules()
    {
        return [
            ['nome', 'required'],
            ['nome', 'string', 'max' => 60]
        ];
    }

    public function getPessoaFisica()
    {
        return $this->hasOne(PessoaFisica::class, ['pessoa_id' => 'id']);
    } 
}