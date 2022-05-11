<?php

namespace app\assets\meusAssets;

use yii\web\AssetBundle;

class SegundoAsset extends AssetBundle{

    public $sourcePath = '@app/assets/meusAssets/files';

    public $css = [
        'estilo-1.css'
    ];

    // se tiver .js pra upar
    // public $js = [
    //     'js/assets.js'
    // ];
    

    
    public $depends = [
        //vai carregar primeiro o PrimeiroAsset (os assets vem antes no carregamento da pagina no navegador)
        'app\assets\meusAssets\PrimeiroAsset'
    ];
}