<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppListShowroom;

/**
 * AppListShowroomSearch represents the model behind the search form of `app\models\AppListShowroom`.
 */
class AppListShowroomSearch extends AppListShowroom
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'provinci_id', 'city_id', 'leasing_id'], 'integer'],
            [['showroom_name', 'logo', 'phone_1', 'phone_2', 'status','latitude', 'langitude', 'created_at'], 'safe'],
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
        $query = AppListShowroom::find();

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
            'provinci_id' => $this->provinci_id,
            'city_id' => $this->city_id,
            'leasing_id' => $this->leasing_id,
            'phone_1' => $this->phone_1,
            'phone_2' => $this->phone_2,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'showroom_name', $this->showroom_name])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
