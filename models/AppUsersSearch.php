<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppUsers;

/**
 * AppUsersSearch represents the model behind the search form of `app\models\AppUsers`.
 */
class AppUsersSearch extends AppUsers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mobil88_cabang', 'id_dealer', 'gender', 'tipe_penjual', 'is_premium', 'jenis_showroom', 'hari_kerja', 'jam_kerja', 'client_prov_id', 'client_city_id', 'client_district_id', 'status', 'status_update', 'sales_listing_id', 'total_ads', 'sn_id', 'counterview', 'wa', 'user_id', 'mediasosial_id', 'city_id'], 'integer'],
            [['subdomain', 'date_created', 'date_modified', 'fullname', 'username', 'slug', 'username_lama', 'description', 'description_service', 'password', 'email', 'facebook', 'twitter', 'address', 'phone', 'phone_2', 'img', 'img_2', 'img_3', 'img_4', 'img_5', 'img_6', 'img_7', 'img_8', 'img_9', 'img_10', 'phone_3', 'phone_4', 'img_1_service', 'img_2_service', 'img_3_service', 'img_4_service', 'img_5_service', 'img_6_service', 'img_7_service', 'img_8_service', 'img_9_service', 'img_10_service', 'desc_1', 'desc_2', 'desc_3', 'desc_4', 'desc_5', 'desc_6', 'desc_7', 'desc_8', 'desc_9', 'desc_10', 'desc_1_service', 'desc_2_service', 'desc_3_service', 'desc_4_service', 'desc_5_service', 'desc_6_service', 'desc_7_service', 'desc_8_service', 'desc_9_service', 'desc_10_service', 'cover_facility', 'cover_list_car', 'cover_staff', 'cover', 'logo', 'headercolor', 'desc_img_showroom', 'sales_showroom', 'gallery_showroom', 'lastlogin', 'vernumber', 'waktu_kunjungan_terakhir', 'waktu_kunjungan_sebelumnya', 'latitude', 'langitude', 'bb', 'gcm_id', 'auth_key', 'password_reset_token', 'device_type', 'media_lainnya', 'flag_ho', 'flag_dealer', 'background_profile', 'domain', 'longitude'], 'safe'],
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
        $query = AppUsers::find();

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
            'date_created' => $this->date_created,
            'date_modified' => $this->date_modified,
            'id_mobil88_cabang' => $this->id_mobil88_cabang,
            'id_dealer' => $this->id_dealer,
            'gender' => $this->gender,
            'tipe_penjual' => $this->tipe_penjual,
            'is_premium' => $this->is_premium,
            'jenis_showroom' => $this->jenis_showroom,
            'hari_kerja' => $this->hari_kerja,
            'jam_kerja' => $this->jam_kerja,
            'client_prov_id' => $this->client_prov_id,
            'client_city_id' => $this->client_city_id,
            'client_district_id' => $this->client_district_id,
            'lastlogin' => $this->lastlogin,
            'status' => $this->status,
            'status_update' => $this->status_update,
            'sales_listing_id' => $this->sales_listing_id,
            'total_ads' => $this->total_ads,
            'sn_id' => $this->sn_id,
            'counterview' => $this->counterview,
            'waktu_kunjungan_terakhir' => $this->waktu_kunjungan_terakhir,
            'waktu_kunjungan_sebelumnya' => $this->waktu_kunjungan_sebelumnya,
            'wa' => $this->wa,
            'user_id' => $this->user_id,
            'mediasosial_id' => $this->mediasosial_id,
            'city_id' => $this->city_id,
        ]);

        $query->andFilterWhere(['like', 'subdomain', $this->subdomain])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'username_lama', $this->username_lama])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'description_service', $this->description_service])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'phone_2', $this->phone_2])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'img_2', $this->img_2])
            ->andFilterWhere(['like', 'img_3', $this->img_3])
            ->andFilterWhere(['like', 'img_4', $this->img_4])
            ->andFilterWhere(['like', 'img_5', $this->img_5])
            ->andFilterWhere(['like', 'img_6', $this->img_6])
            ->andFilterWhere(['like', 'img_7', $this->img_7])
            ->andFilterWhere(['like', 'img_8', $this->img_8])
            ->andFilterWhere(['like', 'img_9', $this->img_9])
            ->andFilterWhere(['like', 'img_10', $this->img_10])
            ->andFilterWhere(['like', 'phone_3', $this->phone_3])
            ->andFilterWhere(['like', 'phone_4', $this->phone_4])
            ->andFilterWhere(['like', 'img_1_service', $this->img_1_service])
            ->andFilterWhere(['like', 'img_2_service', $this->img_2_service])
            ->andFilterWhere(['like', 'img_3_service', $this->img_3_service])
            ->andFilterWhere(['like', 'img_4_service', $this->img_4_service])
            ->andFilterWhere(['like', 'img_5_service', $this->img_5_service])
            ->andFilterWhere(['like', 'img_6_service', $this->img_6_service])
            ->andFilterWhere(['like', 'img_7_service', $this->img_7_service])
            ->andFilterWhere(['like', 'img_8_service', $this->img_8_service])
            ->andFilterWhere(['like', 'img_9_service', $this->img_9_service])
            ->andFilterWhere(['like', 'img_10_service', $this->img_10_service])
            ->andFilterWhere(['like', 'desc_1', $this->desc_1])
            ->andFilterWhere(['like', 'desc_2', $this->desc_2])
            ->andFilterWhere(['like', 'desc_3', $this->desc_3])
            ->andFilterWhere(['like', 'desc_4', $this->desc_4])
            ->andFilterWhere(['like', 'desc_5', $this->desc_5])
            ->andFilterWhere(['like', 'desc_6', $this->desc_6])
            ->andFilterWhere(['like', 'desc_7', $this->desc_7])
            ->andFilterWhere(['like', 'desc_8', $this->desc_8])
            ->andFilterWhere(['like', 'desc_9', $this->desc_9])
            ->andFilterWhere(['like', 'desc_10', $this->desc_10])
            ->andFilterWhere(['like', 'desc_1_service', $this->desc_1_service])
            ->andFilterWhere(['like', 'desc_2_service', $this->desc_2_service])
            ->andFilterWhere(['like', 'desc_3_service', $this->desc_3_service])
            ->andFilterWhere(['like', 'desc_4_service', $this->desc_4_service])
            ->andFilterWhere(['like', 'desc_5_service', $this->desc_5_service])
            ->andFilterWhere(['like', 'desc_6_service', $this->desc_6_service])
            ->andFilterWhere(['like', 'desc_7_service', $this->desc_7_service])
            ->andFilterWhere(['like', 'desc_8_service', $this->desc_8_service])
            ->andFilterWhere(['like', 'desc_9_service', $this->desc_9_service])
            ->andFilterWhere(['like', 'desc_10_service', $this->desc_10_service])
            ->andFilterWhere(['like', 'cover_facility', $this->cover_facility])
            ->andFilterWhere(['like', 'cover_list_car', $this->cover_list_car])
            ->andFilterWhere(['like', 'cover_staff', $this->cover_staff])
            ->andFilterWhere(['like', 'cover', $this->cover])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'headercolor', $this->headercolor])
            ->andFilterWhere(['like', 'desc_img_showroom', $this->desc_img_showroom])
            ->andFilterWhere(['like', 'sales_showroom', $this->sales_showroom])
            ->andFilterWhere(['like', 'gallery_showroom', $this->gallery_showroom])
            ->andFilterWhere(['like', 'vernumber', $this->vernumber])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'langitude', $this->langitude])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'gcm_id', $this->gcm_id])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'device_type', $this->device_type])
            ->andFilterWhere(['like', 'media_lainnya', $this->media_lainnya])
            ->andFilterWhere(['like', 'flag_ho', $this->flag_ho])
            ->andFilterWhere(['like', 'flag_dealer', $this->flag_dealer])
            ->andFilterWhere(['like', 'background_profile', $this->background_profile])
            ->andFilterWhere(['like', 'domain', $this->domain])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
