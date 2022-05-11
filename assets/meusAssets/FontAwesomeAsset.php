<?php

namespace app\assets\meusAssets;

use yii\web\AssetBundle;

//Assets externos quando não estao no servidor da aplicação, quando usamos por CDN. Pra importar eles no projeto
//Primeiramente tentamos importar pelo bower, se nao tiver la, fazemos com assets externos 

class FontAwesomeAsset extends AssetBundle{

    public $css = [
        'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css'
    ];
    
}