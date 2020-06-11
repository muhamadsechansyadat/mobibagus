<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppTipe;

/**
 * AppTipeSearch represents the model behind the search form of `app\models\AppTipe`.
 */
class AppTipeSearch extends AppTipe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_merek', 'id_model', 'cc', 'seats', 'transmission', 'doors', 'engine_cylinder', 'wheels'], 'integer'],
            [['datecreated', 'name', 'description', 'power_steering', 'img_1', 'status'], 'safe'],
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
        $query = AppTipe::find();

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
            'id_model' => $this->id_model,
            'cc' => $this->cc,
            'seats' => $this->seats,
            'transmission' => $this->transmission,
            'doors' => $this->doors,
            'engine_cylinder' => $this->engine_cylinder,
            'wheels' => $this->wheels,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'power_steering', $this->power_steering])
            ->andFilterWhere(['like', 'img_1', $this->img_1])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
