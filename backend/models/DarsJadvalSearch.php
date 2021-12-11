<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DarsJadval;

/**
 * DarsJadvalSearch represents the model behind the search form of `backend\models\DarsJadval`.
 */
class DarsJadvalSearch extends DarsJadval
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'staff_id', 'semid', 'kun', 'juftlik', 'megalka', 'lessontype_id'], 'integer'],
            [['fan', 'gurux'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = DarsJadval::find();

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
            'staff_id' => $this->staff_id,
            'semid' => $this->semid,
            'kun' => $this->kun,
            'juftlik' => $this->juftlik,
            'megalka' => $this->megalka,
            'lessontype_id' => $this->lessontype_id,
        ]);

        $query->andFilterWhere(['like', 'fan', $this->fan])
            ->andFilterWhere(['like', 'gurux', $this->gurux]);

        return $dataProvider;
    }
}
