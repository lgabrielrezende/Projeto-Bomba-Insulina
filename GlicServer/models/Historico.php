<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historico".
 *
 * @property integer $id
 * @property string $periodo
 * @property string $data
 * @property integer $insulina_id
 * @property integer $glicemia_id
 *
 * @property Glicemia $glicemia
 * @property Insulina $insulina
 * @property Tratamento[] $tratamentos
 */
class Historico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'insulina_id', 'glicemia_id'], 'required'],
            [['id', 'insulina_id', 'glicemia_id'], 'integer'],
            [['data'], 'safe'],
            [['periodo'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['glicemia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Glicemia::className(), 'targetAttribute' => ['glicemia_id' => 'id']],
            [['insulina_id'], 'exist', 'skipOnError' => true, 'targetClass' => Insulina::className(), 'targetAttribute' => ['insulina_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'periodo' => 'Periodo',
            'data' => 'Data',
            'insulina_id' => 'Insulina ID',
            'glicemia_id' => 'Glicemia ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlicemia()
    {
        return $this->hasOne(Glicemia::className(), ['id' => 'glicemia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInsulina()
    {
        return $this->hasOne(Insulina::className(), ['id' => 'insulina_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTratamentos()
    {
        return $this->hasMany(Tratamento::className(), ['historico_id' => 'id']);
    }
}
