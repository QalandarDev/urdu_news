<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Hodim;

/**
 * HodimSearch represents the model behind the search form of `backend\models\Hodim`.
 */
class HodimSearch extends Hodim
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cate'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'lav_uz', 'lav_ru', 'lav_en', 'ilm_uz', 'ilm_ru', 'ilm_en', 'ilm1_uz', 'ilm1_ru', 'ilm1_en', 'tel', 'email', 'text_uz', 'text_ru', 'text_en'], 'safe'],
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
        $query = Hodim::find();

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
            'cate' => $this->cate,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'lav_uz', $this->lav_uz])
            ->andFilterWhere(['like', 'lav_ru', $this->lav_ru])
            ->andFilterWhere(['like', 'lav_en', $this->lav_en])
            ->andFilterWhere(['like', 'ilm_uz', $this->ilm_uz])
            ->andFilterWhere(['like', 'ilm_ru', $this->ilm_ru])
            ->andFilterWhere(['like', 'ilm_en', $this->ilm_en])
            ->andFilterWhere(['like', 'ilm1_uz', $this->ilm1_uz])
            ->andFilterWhere(['like', 'ilm1_ru', $this->ilm1_ru])
            ->andFilterWhere(['like', 'ilm1_en', $this->ilm1_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'text_uz', $this->text_uz])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_en', $this->text_en]);

        return $dataProvider;
    }
}
