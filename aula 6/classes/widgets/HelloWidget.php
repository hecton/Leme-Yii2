<?php
namespace app\classes\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
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
        $output  = "<h1>".Html::encode($this->message)."</h1>";
        $output .= "<h2>".Html::encode($this->submessage)."</h2>";

        return $output;
    }
}