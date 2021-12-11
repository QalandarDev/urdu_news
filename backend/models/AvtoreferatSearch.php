<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Avtoreferat;

/**
 * AvtoreferatSearch represents the model behind the search form of `app\models\Avtoreferat`.
 */
class AvtoreferatSearch extends Avtoreferat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'create_at', 'update_at'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'autor_uz', 'autor_ru', 'autor_en', 'date', 'file'], 'safe'],
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
        $query = Avtoreferat::find();

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
            'status' => $this->status,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'autor_uz', $this->autor_uz])
            ->andFilterWhere(['like', 'autor_ru', $this->autor_ru])
            ->andFilterWhere(['like', 'autor_en', $this->autor_en])
            ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
