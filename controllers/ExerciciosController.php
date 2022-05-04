<?php

namespace app\controllers;

use app\models\Pessoas;
use app\models\CadastroModel;
use yii\web\Controller;
use yii\data\Pagination;

class ExerciciosController extends Controller
{
    public function actionFormulario(){
        $cadastroModel = new CadastroModel;

        //pegar dados enviados via POST
        $post = \Yii::$app->request->post();

        if ($cadastroModel->load($post) &&  $cadastroModel->validate()){
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
        } else {
            return $this->render('formulario', [
                'model' => $cadastroModel
            ]);
        }
    }

    public function actionPessoas(){
        //array com os dados do banco
        // $pessoas = Pessoas::find()->orderBy('nome')->all();
        // echo '<pre>'; print_r($pessoas);

        //mostra pessoa com indice 1 (Thiago-thiago_grillo@hotmail.com)
        // $pessoa = Pessoas::findOne(1);
        // echo $pessoa->nome . '-' . $pessoa->email;

        //alterando o nome do indice 1 (Thiago) pra Thiago Grilo.
        // $pessoa = Pessoas::findOne(1);
        // $pessoa->nome = 'Thiago Grillo';
        
        // $pessoa->save();
        // echo $pessoa->nome . '-' . $pessoa->email;

        $query = Pessoas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count()
        ]);

        $pessoas = $query->orderBy('nome')
                         ->offset($pagination->offset)
                         ->limit($pagination->limit)
                         ->all();

        return $this->render('pessoas', [
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);

    }
}