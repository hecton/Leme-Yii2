<?php

namespace app\models;

use app\behaviors\GenerateClienteCodeBehavior;
use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property int $nome
 * @property string|null $code
 * @property string|null $slug
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Cliente extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    public function behaviors()
    {
        return [
            'timespamp' => [
                'class' => TimestampBehavior::className(),
            ],
            'sluggable' => [
                'class' => SluggableBehavior::className(),
                'attribute' => 'nome',
                // 'slugAttribute' => 
            ],
            'generateCode' => [
                'class' => GenerateClienteCodeBehavior::className(),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 60],
            [['created_at', 'updated_at'], 'safe'],
            [['code'], 'string', 'max' => 10],
            [['slug'], 'string', 'max' => 60],
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
            'code' => 'Code',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
