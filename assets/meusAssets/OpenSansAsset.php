<?php

namespace app\assets\meusAssets;

use yii\web\AssetBundle;

//Assets externos quando não estao no servidor da aplicação, quando usamos por CDN. Pra importar eles no projeto
//Primeiramente tentamos importar pelo bower, se nao tiver la, fazemos com assets externos 

class OpenSansAsset extends AssetBundle{

    public $css = [
        'https://fonts.googleapis.com/css2?family=Open+Sans'
    ];
    
}