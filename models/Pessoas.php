<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property int $idade
 * @property string $cidade
 */
class Pessoas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'idade', 'cidade'], 'required'],
            [['idade'], 'integer'],
            [['nome', 'cidade'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'idade' => 'Idade',
            'cidade' => 'Cidade',
        ];
    }
}
