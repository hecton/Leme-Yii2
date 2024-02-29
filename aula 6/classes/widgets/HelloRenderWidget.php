<?php
namespace app\classes\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloRenderWidget extends Widget
{
    public $message;
    public $submessage;


    public function init()
    {
        if($this->message === null){
            $this->message = 'Heloo world';
        }
        
        if($this->submessage === null){
            $this->submessage = 'lorem ts';
        }


    }

    public function run()
    {
        return $this->render('helloRender', [
            'message' => $this->message,
            'submessage'=> $this->submessage
        ]);
    }
}