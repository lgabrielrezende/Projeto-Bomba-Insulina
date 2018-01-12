<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $nome
 * @property string $data
 * @property string $email
 * @property string $senha
 * @property string $telefone
 *
 * @property Tratamento[] $tratamentos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nome', 'email', 'telefone'], 'required'],
            [['id'], 'integer'],
            [['nome'], 'string'],
            [['data'], 'safe'],
            [['email', 'senha', 'telefone'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'data' => 'Data',
            'email' => 'Email',
            'senha' => 'Senha',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTratamentos()
    {
        return $this->hasMany(Tratamento::className(), ['usuario_id' => 'id']);
    }

}
