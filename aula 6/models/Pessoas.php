<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property int|null $idade
 */
class Pessoas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nome', 'email'], 'required'],
            [['id', 'idade'], 'default', 'value' => null],
            [['id', 'idade'], 'integer'],
            [['nome'], 'string', 'max' => 80],
            [['email'], 'string', 'max' => 120],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'E-mail',
            'idade' => 'Idade',
        ];
    }
}
