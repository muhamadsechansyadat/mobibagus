<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppCity;

/**
 * AppCitySearch represents the model behind the search form of `app\models\AppCity`.
 */
class AppCitySearch extends AppCity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id', 'province_id', 'area_tab', 'counter', 'use_promo', 'popular'], 'integer'],
            [['city_name'], 'safe'],
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
        $query = AppCity::find();

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
            'city_id' => $this->city_id,
            'province_id' => $this->province_id,
            'area_tab' => $this->area_tab,
            'counter' => $this->counter,
            'use_promo' => $this->use_promo,
            'popular' => $this->popular,
        ]);

        $query->andFilterWhere(['like', 'city_name', $this->city_name]);

        return $dataProvider;
    }
}
