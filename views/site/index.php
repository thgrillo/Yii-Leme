<?php

/** @var yii\web\View $this */

use yii\jui\DatePicker; //#12 Yii2 - Widgets
use app\classes\widgets\HelloWidget;
use app\classes\widgets\HelloWorldBeginEndWidget;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?= $nome . " " . $sobrenome // valores que foram passados por parametros da actionView (SiteCotroller) ?> 

    <div>
        <?= DatePicker::widget([
            'name' => 'data_venda', //no html cria o campo com name='data_venda'
            'language' => 'pt-br',
            'dateFormat' => 'dd/MM/yyyy'
        ]) //#12 Yii2 - Widgets ?> 
    </div>


    <!-- #12 Yii2 - Widgets  criando o meu proprio-->
    <div>
        <?= 
        HelloWidget::widget([
            'message' => 'Ola Mundo',
            'submessage' => 'mudando texto'
        ]); ?> 
    </div>
    <!-- #12 Yii2 - Widgets -->


    <div>
    <!--      HelloWorldBeginEndWidget::begin(['encode'=>false]) //#12 Yii2 - Widgets vai renderizar com as tags html  -->
        <?php HelloWorldBeginEndWidget::begin() //#12 Yii2 - Widgets vai renderizar sem as tags html ?> 
        <h2>Testando aulas</h2>
        <h3>testestesteste</h3>
        <?php HelloWorldBeginEndWidget::end() //#12 Yii2 - Widgets ?> 
    </div>

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
