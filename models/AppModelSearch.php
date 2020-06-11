<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppModel;

/**
 * AppModelSearch represents the model behind the search form of `app\models\AppModel`.
 */
class AppModelSearch extends AppModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_merek', 'id_body', 'popular', 'allow_promo', 'status'], 'integer'],
            [['datecreated', 'name', 'description_baru', 'description_bekas', 'review', 'img_1', 'img_1260', 'img_600', 'ispremium', 'seo_h1', 'seo_title', 'seo_description', 'seo_keyword', 'fuel_system', 'body_type', 'fuel_type', 'seating_person'], 'safe'],
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
        $query = AppModel::find();

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
            'id_merek' => $this->id_merek,
            'id_body' => $this->id_body,
            'popular' => $this->popular,
            'allow_promo' => $this->allow_promo,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description_baru', $this->description_baru])
            ->andFilterWhere(['like', 'description_bekas', $this->description_bekas])
            ->andFilterWhere(['like', 'review', $this->review])
            ->andFilterWhere(['like', 'img_1', $this->img_1])
            ->andFilterWhere(['like', 'img_1260', $this->img_1260])
            ->andFilterWhere(['like', 'img_600', $this->img_600])
            ->andFilterWhere(['like', 'ispremium', $this->ispremium])
            ->andFilterWhere(['like', 'seo_h1', $this->seo_h1])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description])
            ->andFilterWhere(['like', 'seo_keyword', $this->seo_keyword])
            ->andFilterWhere(['like', 'fuel_system', $this->fuel_system])
            ->andFilterWhere(['like', 'body_type', $this->body_type])
            ->andFilterWhere(['like', 'fuel_type', $this->fuel_type])
            ->andFilterWhere(['like', 'seating_person', $this->seating_person]);

        return $dataProvider;
    }
}
