<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppDatabasemobil;

/**
 * AppDatabasemobilSearch represents the model behind the search form of `app\models\AppDatabasemobil`.
 */
class AppDatabasemobilSearch extends AppDatabasemobil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'showroom_id', 'id_kota', 'status_harga', 'nego', 'merek', 'model', 'tipe', 'transmisi', 'event', 'bahanbakar', 'kondisikendaraan', 'warna', 'kilometer', 'kapasitas', 'sistemroda', 'status', 'sold', 'counter_view', 'prov_id', 'city_id', 'car_district_id', 'sales_lf_id', 'doors', 'seats', 'condition', 'ads_renew', 'ads_premium', 'terpopuler', 'tampilkan_plat', 'user_create', 'source'], 'integer'],
            [['title', 'slug', 'harga', 'hall', 'velg_ban', 'tahun', 'plat', 'masa_stnk', 'description', 'img_default', 'img_1', 'img_2', 'img_3', 'img_4', 'img_5', 'img_6', 'img_7', 'img_8', 'img_9', 'img_10', 'last_view', 'ads_solddate', 'sales_lf_name', 'sales_lf_email', 'sales_lf_phone', 'power_steering', 'plat_start', 'plat_end', 'notification', 'seller_fullname', 'seller_email', 'user_agent', 'user_ip', 'ads_registration', 'ads_confirm', 'ads_active', 'ads_expired', 'ads_pending', 'ads_edited', 'ads_first_active', 'ads_last_renew', 'ads_premium_date', 'last_update', 'last_update_by', 'video', 'datecreated'], 'safe'],
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
        $query = AppDatabasemobil::find();

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
            'user_id' => $this->user_id,
            'showroom_id' => $this->showroom_id,
            'id_kota' => $this->id_kota,
            'status_harga' => $this->status_harga,
            'nego' => $this->nego,
            'merek' => $this->merek,
            'model' => $this->model,
            'tipe' => $this->tipe,
            'transmisi' => $this->transmisi,
            'event' => $this->event,
            'bahanbakar' => $this->bahanbakar,
            'kondisikendaraan' => $this->kondisikendaraan,
            'warna' => $this->warna,
            'kilometer' => $this->kilometer,
            'kapasitas' => $this->kapasitas,
            'sistemroda' => $this->sistemroda,
            'status' => $this->status,
            'sold' => $this->sold,
            'counter_view' => $this->counter_view,
            'last_view' => $this->last_view,
            'ads_solddate' => $this->ads_solddate,
            'prov_id' => $this->prov_id,
            'city_id' => $this->city_id,
            'car_district_id' => $this->car_district_id,
            'sales_lf_id' => $this->sales_lf_id,
            'doors' => $this->doors,
            'seats' => $this->seats,
            'condition' => $this->condition,
            'ads_registration' => $this->ads_registration,
            'ads_confirm' => $this->ads_confirm,
            'ads_active' => $this->ads_active,
            'ads_expired' => $this->ads_expired,
            'ads_pending' => $this->ads_pending,
            'ads_edited' => $this->ads_edited,
            'ads_first_active' => $this->ads_first_active,
            'ads_last_renew' => $this->ads_last_renew,
            'ads_renew' => $this->ads_renew,
            'ads_premium' => $this->ads_premium,
            'ads_premium_date' => $this->ads_premium_date,
            'last_update' => $this->last_update,
            'terpopuler' => $this->terpopuler,
            'tampilkan_plat' => $this->tampilkan_plat,
            'user_create' => $this->user_create,
            'source' => $this->source,
            'datecreated' => $this->datecreated,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'harga', $this->harga])
            ->andFilterWhere(['like', 'hall', $this->hall])
            ->andFilterWhere(['like', 'velg_ban', $this->velg_ban])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'plat', $this->plat])
            ->andFilterWhere(['like', 'masa_stnk', $this->masa_stnk])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'img_default', $this->img_default])
            ->andFilterWhere(['like', 'img_1', $this->img_1])
            ->andFilterWhere(['like', 'img_2', $this->img_2])
            ->andFilterWhere(['like', 'img_3', $this->img_3])
            ->andFilterWhere(['like', 'img_4', $this->img_4])
            ->andFilterWhere(['like', 'img_5', $this->img_5])
            ->andFilterWhere(['like', 'img_6', $this->img_6])
            ->andFilterWhere(['like', 'img_7', $this->img_7])
            ->andFilterWhere(['like', 'img_8', $this->img_8])
            ->andFilterWhere(['like', 'img_9', $this->img_9])
            ->andFilterWhere(['like', 'img_10', $this->img_10])
            ->andFilterWhere(['like', 'sales_lf_name', $this->sales_lf_name])
            ->andFilterWhere(['like', 'sales_lf_email', $this->sales_lf_email])
            ->andFilterWhere(['like', 'sales_lf_phone', $this->sales_lf_phone])
            ->andFilterWhere(['like', 'power_steering', $this->power_steering])
            ->andFilterWhere(['like', 'plat_start', $this->plat_start])
            ->andFilterWhere(['like', 'plat_end', $this->plat_end])
            ->andFilterWhere(['like', 'notification', $this->notification])
            ->andFilterWhere(['like', 'seller_fullname', $this->seller_fullname])
            ->andFilterWhere(['like', 'seller_email', $this->seller_email])
            ->andFilterWhere(['like', 'user_agent', $this->user_agent])
            ->andFilterWhere(['like', 'user_ip', $this->user_ip])
            ->andFilterWhere(['like', 'last_update_by', $this->last_update_by])
            ->andFilterWhere(['like', 'video', $this->video]);

        return $dataProvider;
    }
}
