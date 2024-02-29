<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string|null $head
 * @property string|null $body
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title'], 'required'],
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 120],
            [['head'], 'string', 'max' => 250],
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
            'title' => 'Title',
            'head' => 'Head',
            'body' => 'Body',
        ];
    }

    public function fields()
    {
        return [
            'id',
            'titulo' => 'title',
            'body' => function (News $model) {
                return $model->body??'-';
            }
        ];
    }
}
