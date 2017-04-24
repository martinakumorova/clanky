<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ambulance;

/**
 * AmbulanceSearch represents the model behind the search form about `backend\models\Ambulance`.
 */
class AmbulanceSearch extends Ambulance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ambulance'], 'integer'],
            [['name', 'doctor', 'info'], 'safe'],
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
        $query = Ambulance::find();

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
            'id_ambulance' => $this->id_ambulance,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'doctor', $this->doctor])
            ->andFilterWhere(['like', 'info', $this->info]);

        return $dataProvider;
    }
}
