<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "glicemia".
 *
 * @property integer $id
 * @property string $tipo
 * @property double $quantidade
 * @property double $objetivo
 * @property string $horario
 *
 * @property Historico[] $historicos
 */
class Glicemia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'glicemia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['quantidade', 'objetivo'], 'number'],
            [['horario'], 'safe'],
            [['tipo'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'quantidade' => 'Quantidade',
            'objetivo' => 'Objetivo',
            'horario' => 'Horario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricos()
    {
        return $this->hasMany(Historico::className(), ['glicemia_id' => 'id']);
    }
}
