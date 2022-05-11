<?php 

namespace app\controllers;

use app\classes\filters\TempoAcaoFilter;
use yii\filters\AccessControl;
use yii\web\Controller;

class FiltrosController extends Controller{
    public function behaviors()
    {
        return [
            'tempoacao' => [
                'class' => TempoAcaoFilter::className(),
                'message' => 'Veja quanto tempo demorou: '
            ],
            'access' => [
                'class' => AccessControl::className(),
                //'except' => ['create'], //except só esse pode ser acessado, o resto vai ser redirect pra login
                'only' => ['create', 'update'], //only é protegido, sera redirecionado pra login
                'rules' => [
                    ['allow' => false]
                ]
            ]
        ];
    }

    public function actionIndex(){
        return 'Listagem';
    }

    public function actionCreate(){
        return 'Novo';
    }

    public function actionUpdate(){
        return 'Atualizar';
    }

    public function actionDelete(){
        return 'Remover';
    }

}