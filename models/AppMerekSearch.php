<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppMerek;

/**
 * AppMerekSearch represents the model behind the search form of `app\models\AppMerek`.
 */
class AppMerekSearch extends AppMerek
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'counter', 'popular', 'status'], 'integer'],
            [['datecreated', 'name', 'slug', 'description', 'description_history', 'img_1', 'img_car_sample', 'logo', 'seo_desc_baru', 'seo_desc_bekas'], 'safe'],
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
        $query = AppMerek::find();

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
            'datecreated' => $this->datecreated,
            'counter' => $this->counter,
            'popular' => $this->popular,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'description_history', $this->description_history])
            ->andFilterWhere(['like', 'img_1', $this->img_1])
            ->andFilterWhere(['like', 'img_car_sample', $this->img_car_sample])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'seo_desc_baru', $this->seo_desc_baru])
            ->andFilterWhere(['like', 'seo_desc_bekas', $this->seo_desc_bekas]);

        return $dataProvider;
    }
}
