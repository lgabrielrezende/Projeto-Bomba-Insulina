<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Historico;

/**
 * HistoricoSearch represents the model behind the search form about `app\models\Historico`.
 */
class HistoricoSearch extends Historico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'insulina_id', 'glicemia_id'], 'integer'],
            [['periodo', 'data'], 'safe'],
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
        $query = Historico::find();

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
            'data' => $this->data,
            'insulina_id' => $this->insulina_id,
            'glicemia_id' => $this->glicemia_id,
        ]);

        $query->andFilterWhere(['like', 'periodo', $this->periodo]);

        return $dataProvider;
    }
}
