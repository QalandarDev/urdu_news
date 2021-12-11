<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rectorate;

/**
 * RectorateSearch represents the model behind the search form of `backend\models\Rectorate`.
 */
class RectorateSearch extends Rectorate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'position_uz', 'position_ru', 'position_en', 'title_uz', 'title_ru', 'title_en', 'address_uz', 'address_ru', 'address_en', 'reception_uz', 'reception_ru', 'reception_en', 'autobiography_uz', 'autobiography_ru', 'autobiography_en', 'phone', 'fax', 'email', 'image'], 'safe'],
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
        $query = Rectorate::find();

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
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'position_uz', $this->position_uz])
            ->andFilterWhere(['like', 'position_ru', $this->position_ru])
            ->andFilterWhere(['like', 'position_en', $this->position_en])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'address_uz', $this->address_uz])
            ->andFilterWhere(['like', 'address_ru', $this->address_ru])
            ->andFilterWhere(['like', 'address_en', $this->address_en])
            ->andFilterWhere(['like', 'reception_uz', $this->reception_uz])
            ->andFilterWhere(['like', 'reception_ru', $this->reception_ru])
            ->andFilterWhere(['like', 'reception_en', $this->reception_en])
            ->andFilterWhere(['like', 'autobiography_uz', $this->autobiography_uz])
            ->andFilterWhere(['like', 'autobiography_ru', $this->autobiography_ru])
            ->andFilterWhere(['like', 'autobiography_en', $this->autobiography_en])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
