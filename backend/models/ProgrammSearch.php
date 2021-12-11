<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Programm;

class ProgrammSearch extends Programm
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'year'], 'safe'],
        ];
    }
	
    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Programm::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'year', $this->year]);

        return $dataProvider;
    }
}
