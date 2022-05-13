<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class FormatterController extends Controller{

    public function actionIndex(){
        $appLang = Yii::$app->language;

        /** @var MyFormatter $formatter */  //Pra completar a escrita.

        $formatter =Yii::$app->formatter;

        echo "<h2>$appLang</h2>";
        echo "
            <p>NText: {$formatter->asNtext("Thiago\nDel\nNery\nGrillo")}</p> 
            <p>CPF: {$formatter->asCpf('01234567890')}</p> 
            <p>CNPJ: {$formatter->asCnpj('01234567890123')}</p> 
            <p>CEP: {$formatter->asCep('82547554')}</p> 
            <p>Size: {$formatter->asShortSize(1024464564, 2)}</p> 
            <p>Size: {$formatter->asSize(1024464564)}</p> 
            <p>Currency: {$formatter->asCurrency(1000.20, 'BRL')}</p> 
            <p>Datas: {$formatter->asDate("2016-03-20", 'dd/MM/yyyy')}</p>
            <p>Datas: {$formatter->asDate("2016-03-20", 'short')}</p>
            <p>Datas: {$formatter->asDate("2016-03-20", 'medium')}</p>
            <p>Datas: {$formatter->asDate("2016-03-20", 'long')}</p>
            <p>Datas: {$formatter->asDate("2016-03-20", 'full')}</p>
            <p>Emails: {$formatter->asEmail('thgrillo@thgrillo.com')}</p>
            <p>Booleans: {$formatter->asBoolean(true)}</p>
            <p>Percentual: {$formatter->asPercent(0.12345, 2)}</p>
        ";
    }
}