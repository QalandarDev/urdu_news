<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Mandat;

/**
 * MandatSearch represents the model behind the search form of `frontend\models\Mandat`.
 */
class MandatSearch extends Mandat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'MVDir', 'NTvorec', 'SCode'], 'integer'],
            [['EN', 'LN', 'MN', 'AccName', 'f1', 'f2', 'FISH'], 'safe'],
            [['NBall1', 'NBall2', 'NLgotBall', 'NComBall'], 'number'],
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
        $query = Mandat::find()->orderBy(['AccName' => SORT_ASC, 'NComBall' => SORT_DESC]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pagesize' => 200,
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
//        $query->andFilterWhere([
//            'id' => $this->id,
//            'MVDir' => $this->MVDir,
//            'NBall1' => $this->NBall1,
//            'NBall2' => $this->NBall2,
//            'NTvorec' => $this->NTvorec,
//            'NLgotBall' => $this->NLgotBall,
//            'NComBall' => $this->NComBall,
//            'SCode' => $this->SCode,
//        ]);
        if ($this->MN && $this->LN && $this->EN) {

        }else{
            if ($this->EN && $this->LN) {
                $this->MN = null;
            }else{
                $this->LN = null;
                $this->MN = null;
            }
        }
        $query->andFilterWhere(['like', 'EN', $this->EN])
            ->andFilterWhere(['like', 'LN', $this->LN])
            ->andFilterWhere(['like', 'MN', $this->MN]);

            return $dataProvider;
    }
}
