<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_databasemobil".
 *
 * @property int $id
 * @property int $user_id
 * @property int $showroom_id
 * @property string $title
 * @property string $slug
 * @property int $id_kota
 * @property int $status_harga
 * @property string $harga
 * @property int $nego
 * @property int $merek
 * @property int $model
 * @property int $tipe
 * @property int $transmisi
 * @property int $event 0: IIMS, 1: GIIAS
 * @property string $hall
 * @property int $bahanbakar
 * @property int $kondisikendaraan
 * @property int $warna
 * @property string $velg_ban
 * @property string $tahun
 * @property int $kilometer
 * @property int $kapasitas
 * @property string $plat
 * @property int $sistemroda
 * @property string $masa_stnk
 * @property string $description
 * @property int $status
 * @property int $sold
 * @property string $img_default
 * @property string $img_1
 * @property string $img_2
 * @property string $img_3
 * @property string $img_4
 * @property string $img_5
 * @property string $img_6
 * @property string $img_7
 * @property string $img_8
 * @property string $img_9
 * @property string $img_10
 * @property int $counter_view
 * @property string $last_view
 * @property string $ads_solddate
 * @property int $prov_id
 * @property int $city_id
 * @property int $car_district_id
 * @property int $sales_lf_id
 * @property string $sales_lf_name
 * @property string $sales_lf_email
 * @property string $sales_lf_phone
 * @property int $doors
 * @property int $seats
 * @property string $power_steering
 * @property int $condition Condition - 0: Near New,  1:Very Good, 2:Good,  3:Fair, 4:Need repair,  5:non-functional , 6:baru - Predefined HardCode Data - [RadioButton]
 * @property string $plat_start
 * @property string $plat_end
 * @property string $notification
 * @property string $seller_fullname
 * @property string $seller_email
 * @property string $user_agent
 * @property string $user_ip
 * @property string $ads_registration
 * @property string $ads_confirm
 * @property string $ads_active
 * @property string $ads_expired
 * @property string $ads_pending
 * @property string $ads_edited
 * @property string $ads_first_active
 * @property string $ads_last_renew
 * @property int $ads_renew
 * @property int $ads_premium 0:regular;1:premiun;2:kings;
 * @property string $ads_premium_date
 * @property string $last_update
 * @property string $last_update_by
 * @property int $terpopuler
 * @property int $tampilkan_plat 0:"Tidak",1:"Ya"
 * @property int $user_create
 * @property string $video
 * @property int $source
 * @property string $datecreated
 *
 * @property AppCity $city
 * @property AppMerek $merek0
 * @property AppModel $model0
 * @property AppProvince $prov
 * @property AppListShowroom $showroom
 * @property AppTipe $tipe0
 * @property AppUsers $user
 * @property AppWarna $warna0
 */
class AppDatabasemobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_databasemobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','id_kota', 'status_harga', 'nego', 'merek', 'model', 'tipe', 'transmisi', 'bahanbakar', 'kondisikendaraan', 'warna', 'kilometer', 'kapasitas', 'sistemroda', 'masa_stnk', 'description', 'status','user_create'], 'required'],
            [['user_id', 'showroom_id', 'id_kota', 'status_harga', 'nego', 'merek', 'model', 'tipe', 'transmisi', 'event', 'bahanbakar', 'kondisikendaraan', 'warna', 'kilometer', 'kapasitas', 'sistemroda', 'status', 'sold', 'counter_view', 'prov_id', 'city_id', 'car_district_id', 'sales_lf_id', 'doors', 'seats', 'condition', 'ads_renew', 'ads_premium', 'terpopuler', 'tampilkan_plat', 'user_create', 'source'], 'integer'],
            [['slug', 'masa_stnk', 'description', 'img_default', 'img_1', 'img_2', 'img_3', 'img_4', 'img_5', 'img_6', 'img_7', 'img_8', 'img_9', 'img_10', 'power_steering', 'notification', 'user_agent', 'user_ip'], 'string'],
            [['last_view', 'ads_solddate', 'ads_registration', 'ads_confirm', 'ads_active', 'ads_expired', 'ads_pending', 'ads_edited', 'ads_first_active', 'ads_last_renew', 'ads_premium_date', 'last_update', 'datecreated'], 'safe'],
            [['title', 'harga', 'velg_ban', 'tahun', 'plat', 'sales_lf_name'], 'string', 'max' => 255],
            [['hall', 'sales_lf_email', 'last_update_by', 'video'], 'string', 'max' => 100],
            [['sales_lf_phone'], 'string', 'max' => 15],
            [['plat_start', 'plat_end'], 'string', 'max' => 3],
            [['seller_fullname', 'seller_email'], 'string', 'max' => 200],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppCity::className(), 'targetAttribute' => ['city_id' => 'city_id']],
            [['merek'], 'exist', 'skipOnError' => true, 'targetClass' => AppMerek::className(), 'targetAttribute' => ['merek' => 'id']],
            [['model'], 'exist', 'skipOnError' => true, 'targetClass' => AppModel::className(), 'targetAttribute' => ['model' => 'id']],
            [['prov_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppProvince::className(), 'targetAttribute' => ['prov_id' => 'province_id']],
            [['showroom_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppListShowroom::className(), 'targetAttribute' => ['showroom_id' => 'id']],
            [['tipe'], 'exist', 'skipOnError' => true, 'targetClass' => AppTipe::className(), 'targetAttribute' => ['tipe' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppUsers::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['warna'], 'exist', 'skipOnError' => true, 'targetClass' => AppWarna::className(), 'targetAttribute' => ['warna' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'showroom_id' => 'Showroom ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'id_kota' => 'Id Kota',
            'status_harga' => 'Status Harga',
            'harga' => 'Harga',
            'nego' => 'Nego',
            'merek' => 'Merek',
            'model' => 'Model',
            'tipe' => 'Tipe',
            'transmisi' => 'Transmisi',
            'event' => 'Event',
            'hall' => 'Hall',
            'bahanbakar' => 'Bahanbakar',
            'kondisikendaraan' => 'Kondisikendaraan',
            'warna' => 'Warna',
            'velg_ban' => 'Velg Ban',
            'tahun' => 'Tahun',
            'kilometer' => 'Kilometer',
            'kapasitas' => 'Kapasitas',
            'plat' => 'Plat',
            'sistemroda' => 'Sistemroda',
            'masa_stnk' => 'Masa Stnk',
            'description' => 'Description',
            'status' => 'Status',
            'sold' => 'Sold',
            'img_default' => 'Img Default',
            'img_1' => 'Img 1',
            'img_2' => 'Img 2',
            'img_3' => 'Img 3',
            'img_4' => 'Img 4',
            'img_5' => 'Img 5',
            'img_6' => 'Img 6',
            'img_7' => 'Img 7',
            'img_8' => 'Img 8',
            'img_9' => 'Img 9',
            'img_10' => 'Img 10',
            'counter_view' => 'Counter View',
            'last_view' => 'Last View',
            'ads_solddate' => 'Ads Solddate',
            'prov_id' => 'Prov ID',
            'city_id' => 'City ID',
            'car_district_id' => 'Car District ID',
            'sales_lf_id' => 'Sales Lf ID',
            'sales_lf_name' => 'Sales Lf Name',
            'sales_lf_email' => 'Sales Lf Email',
            'sales_lf_phone' => 'Sales Lf Phone',
            'doors' => 'Doors',
            'seats' => 'Seats',
            'power_steering' => 'Power Steering',
            'condition' => 'Condition',
            'plat_start' => 'Plat Start',
            'plat_end' => 'Plat End',
            'notification' => 'Notification',
            'seller_fullname' => 'Seller Fullname',
            'seller_email' => 'Seller Email',
            'user_agent' => 'User Agent',
            'user_ip' => 'User Ip',
            'ads_registration' => 'Ads Registration',
            'ads_confirm' => 'Ads Confirm',
            'ads_active' => 'Ads Active',
            'ads_expired' => 'Ads Expired',
            'ads_pending' => 'Ads Pending',
            'ads_edited' => 'Ads Edited',
            'ads_first_active' => 'Ads First Active',
            'ads_last_renew' => 'Ads Last Renew',
            'ads_renew' => 'Ads Renew',
            'ads_premium' => 'Ads Premium',
            'ads_premium_date' => 'Ads Premium Date',
            'last_update' => 'Last Update',
            'last_update_by' => 'Last Update By',
            'terpopuler' => 'Terpopuler',
            'tampilkan_plat' => 'Tampilkan Plat',
            'user_create' => 'User Create',
            'video' => 'Video',
            'source' => 'Source',
            'datecreated' => 'Datecreated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(AppCity::className(), ['city_id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerek0()
    {
        return $this->hasOne(AppMerek::className(), ['id' => 'merek']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel0()
    {
        return $this->hasOne(AppModel::className(), ['id' => 'model']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProv()
    {
        return $this->hasOne(AppProvince::className(), ['province_id' => 'prov_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowroom()
    {
        return $this->hasOne(AppListShowroom::className(), ['id' => 'showroom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipe0()
    {
        return $this->hasOne(AppTipe::className(), ['id' => 'tipe']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(AppUsers::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarna0()
    {
        return $this->hasOne(AppWarna::className(), ['id' => 'warna']);
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $slug = strtolower($this->title);
            $slug = str_replace(array(' ', '+', '=', '"', '(', ')'), '-', $slug);
            $this->slug = $slug;

            $this->datecreated = date('Y-m-d H:i:s');

        }
        return true;
    }
}
