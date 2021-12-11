<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CenterPage;

/**
 * CenterPageSearch represents the model behind the search form of `backend\models\CenterPage`.
 */
class CenterPageSearch extends CenterPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['about_uz', 'about_ru', 'about_en', 'date', 'ilmiy_uz', 'ilmiy_ru', 'ilmiy_en', 'aloqa_uz', 'aloqa_ru', 'aloqa_en', 'grant_uz', 'grant_ru', 'grant_en'], 'safe'],
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
        $query = CenterPage::find();

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
            'user_id' => $this->user_id,
            'date' => $this->date,
        ]);

        $query
			->andFilterWhere(['like', 'about_uz', $this->about_uz])
            ->andFilterWhere(['like', 'about_ru', $this->about_ru])
            ->andFilterWhere(['like', 'about_en', $this->about_en])
            ->andFilterWhere(['like', 'ilmiy_uz', $this->ilmiy_uz])
            ->andFilterWhere(['like', 'ilmiy_ru', $this->ilmiy_ru])
            ->andFilterWhere(['like', 'ilmiy_en', $this->ilmiy_en])
            ->andFilterWhere(['like', 'aloqa_uz', $this->aloqa_uz])
            ->andFilterWhere(['like', 'aloqa_ru', $this->aloqa_ru])
            ->andFilterWhere(['like', 'aloqa_en', $this->aloqa_en])
            ->andFilterWhere(['like', 'grant_uz', $this->grant_uz])
            ->andFilterWhere(['like', 'grant_ru', $this->grant_ru])
            ->andFilterWhere(['like', 'grant_en', $this->grant_en]);

        return $dataProvider;
    }
}
