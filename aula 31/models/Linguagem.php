<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Linguagem
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property ProgramadorLinguagem[] $programadorLinguagem
 * @property Programador[] $programadores
 * 
 */
class Linguagem extends ActiveRecord
{
    public static function tableName()
    {
        return 'linguagens';
    }

    public function rules()
    {
        return [
            ['nome' ,'required'],
            ['nome' ,'string', 'max' => 60],
        ];
    }

    public function getProgramadorLinguagem()
    {
        return $this->hasMany(ProgramadorLinguagem::class, ['id'=> 'linguagem_id']);
    }

    public function getProgramadores()
    {
        return $this->hasMany(Programador::class, ['id' => 'programador_id'])
            ->viaTable(ProgramadorLinguagem::tableName(), ['programador_id' => 'id'] );
    }
}