<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Events;

/**
 * EventsSearch represents the model behind the search form of `backend\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'count'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'date', 'time', 'location_uz', 'img', 'location_ru', 'location_en'], 'safe'],
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
        $query = Events::find()->orderBy(['id'=>SORT_DESC]);

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
            'date' => $this->date,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'text_uz', $this->text_uz])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_en', $this->text_en])
            ->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'location_uz', $this->location_uz])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'location_ru', $this->location_ru])
            ->andFilterWhere(['like', 'location_en', $this->location_en]);

        return $dataProvider;
    }
}
