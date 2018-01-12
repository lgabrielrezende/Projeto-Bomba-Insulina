<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tratamento".
 *
 * @property string $id
 * @property string $idade
 * @property string $sexo
 * @property double $altura
 * @property string $medidor
 * @property integer $usuario_id
 * @property integer $historico_id
 * @property integer $objideal
 * @property integer $objmax
 * @property integer $objmin
 *
 * @property Historico $historico
 * @property Usuario $usuario
 */
class Tratamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tratamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'usuario_id', 'historico_id'], 'required'],
            [['id', 'usuario_id', 'historico_id', 'objideal', 'objmax', 'objmin'], 'integer'],
            [['altura'], 'number'],
            [['idade', 'medidor'], 'string', 'max' => 45],
            [['sexo'], 'string', 'max' => 1],
            [['historico_id'], 'exist', 'skipOnError' => true, 'targetClass' => Historico::className(), 'targetAttribute' => ['historico_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idade' => 'Idade',
            'sexo' => 'Sexo',
            'altura' => 'Altura',
            'medidor' => 'Medidor',
            'usuario_id' => 'Usuario ID',
            'historico_id' => 'Historico ID',
            'objideal' => 'Objideal',
            'objmax' => 'Objmax',
            'objmin' => 'Objmin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorico()
    {
        return $this->hasOne(Historico::className(), ['id' => 'historico_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
