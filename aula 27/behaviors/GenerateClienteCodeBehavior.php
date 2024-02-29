<?php 
namespace app\behaviors;

use Yii;
use yii\base\Event;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class GenerateClienteCodeBehavior extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_INSERT => "run",
            ActiveRecord::EVENT_BEFORE_UPDATE => "run"
        ];
    }

    public function run(Event $event)
    {
        $this->owner->code = Yii::$app->security->generateRandomString(10);
    }
}