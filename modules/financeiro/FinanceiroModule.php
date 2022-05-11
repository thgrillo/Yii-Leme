<?php

namespace app\modules\financeiro;

use Yii;
use yii\base\Module;


class FinanceiroModule extends Module{

    public $layout = 'blank'; // setar layout do modulo financeiro.
                              // sem essa linha, o yii vai renderizar o layout do @app 

    public function init(){

        parent::init();

        //exemplos pra setar o init
        //$this->params['nome'] = 'Thiago';
        //$this->params['sobrenome'] = 'Grillo';

        Yii::configure($this, require(__DIR__ . '/config/main.php'));
    }
}