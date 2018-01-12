<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tratamento;

/**
 * TratamentoSearch represents the model behind the search form about `app\models\Tratamento`.
 */
class TratamentoSearch extends Tratamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'usuario_id', 'historico_id', 'objideal', 'objmax', 'objmin'], 'integer'],
            [['idade', 'sexo', 'medidor'], 'safe'],
            [['altura'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tratamento::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'altura' => $this->altura,
            'usuario_id' => $this->usuario_id,
            'historico_id' => $this->historico_id,
            'objideal' => $this->objideal,
            'objmax' => $this->objmax,
            'objmin' => $this->objmin,
        ]);

        $query->andFilterWhere(['like', 'idade', $this->idade])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'medidor', $this->medidor]);

        return $dataProvider;
    }
}
