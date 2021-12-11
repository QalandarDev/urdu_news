<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Center;

/**
 * CenterSearch represents the model behind the search form of `backend\models\Center`.
 */
class CenterSearch extends Center
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id','cate'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'image'], 'safe'],
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
        $query = Center::find();

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
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'cate', $this->cate]);

        return $dataProvider;
    }
}
