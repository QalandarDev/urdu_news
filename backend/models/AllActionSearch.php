<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AllAction;
use yii\helpers\VarDumper;

/**
 * AllActionSearch represents the model behind the search form of `backend\models\AllAction`.
 */
class AllActionSearch extends AllAction
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['cate'],'safe'],
            [['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'date'], 'safe'],
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
        $query = AllAction::find();


        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
//        VarDumper::dump($params,10,true);
//        exit();
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->innerJoinWith([
           'cate0'
        ]);

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'text_uz', $this->text_uz])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_en', $this->text_en])
            ->andFilterWhere(['like', 'all_cate.name_uz', $this->cate]);

        return $dataProvider;
    }
}
