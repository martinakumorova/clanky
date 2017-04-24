<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Term;

/**
 * TermSearch represents the model behind the search form about `backend\models\Term`.
 */
class TermSearch extends Term
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_term', 'user_id_user', 'ambulance_id_ambulance'], 'integer'],
            [['date_time'], 'safe'],
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
        $query = Term::find();

        // add conditions that should always apply here
        $query->joinWith(['userIdUser']);
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
            'id_term' => $this->id_term,
            'date_time' => $this->date_time,
            'user_id_user' => $this->user_id_user,
            'ambulance_id_ambulance' => $this->ambulance_id_ambulance,
        ]);

        return $dataProvider;
    }
}
