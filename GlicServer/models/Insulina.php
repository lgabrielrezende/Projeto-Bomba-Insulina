<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "insulina".
 *
 * @property integer $id
 * @property string $tipo
 * @property double $escala
 * @property double $quantidade
 * @property string $horario
 * @property string $insulinacol
 *
 * @property Historico[] $historicos
 */
class Insulina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'insulina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['escala', 'quantidade'], 'number'],
            [['horario'], 'safe'],
            [['tipo', 'insulinacol'], 'string', 'max' => 45],
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
            'escala' => 'Escala',
            'quantidade' => 'Quantidade',
            'horario' => 'Horario',
            'insulinacol' => 'Insulinacol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricos()
    {
        return $this->hasMany(Historico::className(), ['insulina_id' => 'id']);
    }
}
