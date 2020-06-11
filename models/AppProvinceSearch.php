<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppProvince;

/**
 * AppProvinceSearch represents the model behind the search form of `app\models\AppProvince`.
 */
class AppProvinceSearch extends AppProvince
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_id', 'area_tab', 'counter', 'status'], 'integer'],
            [['province_name', 'province_code'], 'safe'],
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
        $query = AppProvince::find();

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
            'province_id' => $this->province_id,
            'area_tab' => $this->area_tab,
            'counter' => $this->counter,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'province_name', $this->province_name])
            ->andFilterWhere(['like', 'province_code', $this->province_code]);

        return $dataProvider;
    }
}
