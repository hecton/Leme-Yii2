<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $nome
 */
class PessoaFisica extends ActiveRecord
{
    public static function tableName()
    {
        return 'pessoas_fisica';
    }

    public function rules()
    {
        return [
            ['pessoa_id', 'required'],
            ['pessoa_id', 'integer'],
            ['cpf', 'string', 'max' => 11],
        ];
    }

    public function getPessoa()
    {
        return $this->hasOne(Pessoa::class, ['id' => 'pessoa_id']);
    } 
}