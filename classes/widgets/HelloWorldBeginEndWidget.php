<?php

namespace app\classes\widgets;

use \yii\base\Widget;
use \yii\bootstrap4\Html; //especificar o boots

class HelloWorldBeginEndWidget extends Widget{
    
    public $encode = true;
    

    public function init(){

        parent::init();
        ob_start();
    }

    public function run(){
        $content = ob_get_clean();

        if($this->encode)
            return Html::encode($content);
        else
            return $content;
    }
}