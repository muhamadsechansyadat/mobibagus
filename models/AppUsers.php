<?php

namespace app\models;

use Yii;
use Yii\web\UploadedFile;

/**
 * This is the model class for table "app_users".
 *
 * @property int $id
 * @property string $subdomain
 * @property string $date_created
 * @property string $date_modified
 * @property int $id_mobil88_cabang
 * @property int $id_dealer
 * @property string $fullname
 * @property string $username
 * @property string $slug
 * @property string $username_lama
 * @property string $description
 * @property string $description_service
 * @property string $password
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $address
 * @property string $phone
 * @property string $phone_2
 * @property int $gender
 * @property int $tipe_penjual
 * @property int $is_premium
 * @property int $jenis_showroom
 * @property int $hari_kerja
 * @property int $jam_kerja
 * @property int $client_prov_id
 * @property int $client_city_id
 * @property int $client_district_id
 * @property string $img
 * @property string $img_2
 * @property string $img_3
 * @property string $img_4
 * @property string $img_5
 * @property string $img_6
 * @property string $img_7
 * @property string $img_8
 * @property string $img_9
 * @property string $img_10
 * @property string $phone_3
 * @property string $phone_4
 * @property string $img_1_service
 * @property string $img_2_service
 * @property string $img_3_service
 * @property string $img_4_service
 * @property string $img_5_service
 * @property string $img_6_service
 * @property string $img_7_service
 * @property string $img_8_service
 * @property string $img_9_service
 * @property string $img_10_service
 * @property string $desc_1
 * @property string $desc_2
 * @property string $desc_3
 * @property string $desc_4
 * @property string $desc_5
 * @property string $desc_6
 * @property string $desc_7
 * @property string $desc_8
 * @property string $desc_9
 * @property string $desc_10
 * @property string $desc_1_service
 * @property string $desc_2_service
 * @property string $desc_3_service
 * @property string $desc_4_service
 * @property string $desc_5_service
 * @property string $desc_6_service
 * @property string $desc_7_service
 * @property string $desc_8_service
 * @property string $desc_9_service
 * @property string $desc_10_service
 * @property string $cover_facility
 * @property string $cover_list_car
 * @property string $cover_staff
 * @property string $cover
 * @property string $logo
 * @property string $headercolor
 * @property string $desc_img_showroom
 * @property string $sales_showroom
 * @property string $gallery_showroom
 * @property string $lastlogin
 * @property int $status
 * @property int $status_update status update, jika sales mengupdate profilenya , 0 = done, 1 = moderasi
 * @property string $vernumber
 * @property int $sales_listing_id sales listing id
 * @property int $total_ads
 * @property int $sn_id
 * @property int $counterview
 * @property string $waktu_kunjungan_terakhir
 * @property string $waktu_kunjungan_sebelumnya
 * @property string $latitude
 * @property string $langitude
 * @property int $wa 1: "Yes", 0: "No"
 * @property string $bb
 * @property string $gcm_id
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $device_type
 * @property int $user_id untuk meyimpan id user yg berelasi dengan client
 * @property int $mediasosial_id id media sosial
 * @property string $media_lainnya media sosial lainnya dalam bentuk sting
 * @property string $flag_ho
 * @property string $flag_dealer
 * @property string $background_profile
 * @property string $domain
 * @property int $city_id
 * @property string $longitude
 */
class AppUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['background_profile'], 'required'],
            [['date_created', 'date_modified', 'lastlogin', 'waktu_kunjungan_terakhir', 'waktu_kunjungan_sebelumnya'], 'safe'],
            [['id_mobil88_cabang', 'id_dealer', 'gender', 'tipe_penjual', 'is_premium', 'jenis_showroom', 'hari_kerja', 'jam_kerja', 'client_prov_id', 'client_city_id', 'client_district_id', 'status', 'status_update', 'sales_listing_id', 'total_ads', 'sn_id', 'counterview', 'wa', 'user_id', 'mediasosial_id', 'city_id'], 'integer'],
            [['description', 'description_service', 'address', 'img', 'img_2', 'img_3', 'img_4', 'img_5', 'img_6', 'img_7', 'img_8', 'img_9', 'img_10', 'img_1_service', 'img_2_service', 'img_3_service', 'img_4_service', 'img_5_service', 'img_6_service', 'img_7_service', 'img_8_service', 'img_9_service', 'img_10_service', 'desc_1', 'desc_2', 'desc_3', 'desc_4', 'desc_5', 'desc_6', 'desc_7', 'desc_8', 'desc_9', 'desc_10', 'desc_1_service', 'desc_2_service', 'desc_3_service', 'desc_4_service', 'desc_5_service', 'desc_6_service', 'desc_7_service', 'desc_8_service', 'desc_9_service', 'desc_10_service', 'cover', 'logo', 'desc_img_showroom', 'sales_showroom', 'gallery_showroom', 'gcm_id', 'flag_ho', 'flag_dealer'], 'string'],
            [['subdomain', 'latitude', 'langitude'], 'string', 'max' => 50],
            [['fullname', 'username', 'slug', 'username_lama', 'password', 'email', 'facebook', 'twitter', 'phone', 'phone_2', 'vernumber', 'password_reset_token', 'background_profile', 'domain'], 'string', 'max' => 255],
            [['phone_3', 'phone_4'], 'string', 'max' => 20],
            [['cover_facility', 'cover_list_car', 'cover_staff', 'device_type', 'longitude'], 'string', 'max' => 100],
            [['headercolor', 'bb'], 'string', 'max' => 10],
            [['auth_key'], 'string', 'max' => 32],
            [['media_lainnya'], 'string', 'max' => 200],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subdomain' => 'Subdomain',
            'date_created' => 'Date Created',
            'date_modified' => 'Date Modified',
            'id_mobil88_cabang' => 'Id Mobil88 Cabang',
            'id_dealer' => 'Id Dealer',
            'fullname' => 'Fullname',
            'username' => 'Username',
            'slug' => 'Slug',
            'username_lama' => 'Username Lama',
            'description' => 'Description',
            'description_service' => 'Description Service',
            'password' => 'Password',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'address' => 'Address',
            'phone' => 'Phone',
            'phone_2' => 'Phone 2',
            'gender' => 'Gender',
            'tipe_penjual' => 'Tipe Penjual',
            'is_premium' => 'Is Premium',
            'jenis_showroom' => 'Jenis Showroom',
            'hari_kerja' => 'Hari Kerja',
            'jam_kerja' => 'Jam Kerja',
            'client_prov_id' => 'Client Prov ID',
            'client_city_id' => 'Client City ID',
            'client_district_id' => 'Client District ID',
            'img' => 'Img',
            'img_2' => 'Img 2',
            'img_3' => 'Img 3',
            'img_4' => 'Img 4',
            'img_5' => 'Img 5',
            'img_6' => 'Img 6',
            'img_7' => 'Img 7',
            'img_8' => 'Img 8',
            'img_9' => 'Img 9',
            'img_10' => 'Img 10',
            'phone_3' => 'Phone 3',
            'phone_4' => 'Phone 4',
            'img_1_service' => 'Img 1 Service',
            'img_2_service' => 'Img 2 Service',
            'img_3_service' => 'Img 3 Service',
            'img_4_service' => 'Img 4 Service',
            'img_5_service' => 'Img 5 Service',
            'img_6_service' => 'Img 6 Service',
            'img_7_service' => 'Img 7 Service',
            'img_8_service' => 'Img 8 Service',
            'img_9_service' => 'Img 9 Service',
            'img_10_service' => 'Img 10 Service',
            'desc_1' => 'Desc 1',
            'desc_2' => 'Desc 2',
            'desc_3' => 'Desc 3',
            'desc_4' => 'Desc 4',
            'desc_5' => 'Desc 5',
            'desc_6' => 'Desc 6',
            'desc_7' => 'Desc 7',
            'desc_8' => 'Desc 8',
            'desc_9' => 'Desc 9',
            'desc_10' => 'Desc 10',
            'desc_1_service' => 'Desc 1 Service',
            'desc_2_service' => 'Desc 2 Service',
            'desc_3_service' => 'Desc 3 Service',
            'desc_4_service' => 'Desc 4 Service',
            'desc_5_service' => 'Desc 5 Service',
            'desc_6_service' => 'Desc 6 Service',
            'desc_7_service' => 'Desc 7 Service',
            'desc_8_service' => 'Desc 8 Service',
            'desc_9_service' => 'Desc 9 Service',
            'desc_10_service' => 'Desc 10 Service',
            'cover_facility' => 'Cover Facility',
            'cover_list_car' => 'Cover List Car',
            'cover_staff' => 'Cover Staff',
            'cover' => 'Cover',
            'logo' => 'Logo',
            'headercolor' => 'Headercolor',
            'desc_img_showroom' => 'Desc Img Showroom',
            'sales_showroom' => 'Sales Showroom',
            'gallery_showroom' => 'Gallery Showroom',
            'lastlogin' => 'Lastlogin',
            'status' => 'Status',
            'status_update' => 'Status Update',
            'vernumber' => 'Vernumber',
            'sales_listing_id' => 'Sales Listing ID',
            'total_ads' => 'Total Ads',
            'sn_id' => 'Sn ID',
            'counterview' => 'Counterview',
            'waktu_kunjungan_terakhir' => 'Waktu Kunjungan Terakhir',
            'waktu_kunjungan_sebelumnya' => 'Waktu Kunjungan Sebelumnya',
            'latitude' => 'Latitude',
            'langitude' => 'Langitude',
            'wa' => 'Wa',
            'bb' => 'Bb',
            'gcm_id' => 'Gcm ID',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'device_type' => 'Device Type',
            'user_id' => 'User ID',
            'mediasosial_id' => 'Mediasosial ID',
            'media_lainnya' => 'Media Lainnya',
            'flag_ho' => 'Flag Ho',
            'flag_dealer' => 'Flag Dealer',
            'background_profile' => 'Background Profile',
            'domain' => 'Domain',
            'city_id' => 'City ID',
            'longitude' => 'Longitude',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->date_created = date('Y-m-d');
            // $this->updated_at = date('Y-m-d');
        }
        return true;
    }

}
