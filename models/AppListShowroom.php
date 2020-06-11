<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_list_showroom".
 *
 * @property int $id
 * @property int $provinci_id
 * @property int $city_id
 * @property int $leasing_id
 * @property string $showroom_name
 * @property string $logo
 *
 * @property AppDatabasemobil[] $appDatabasemobils
 * @property AppCity $city
 * @property AppListLeasing $leasing
 * @property AppProvince $provinci
 */
class AppListShowroom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName()
    {
        return 'app_list_showroom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinci_id', 'city_id', 'leasing_id', 'phone_1', 'phone_2'], 'integer'],
            [['phone_1', 'phone_2', 'status', 'created_at'], 'safe'],
            // [['file'], 'file', 'skipOnEmpty' => 'false'],
            [['showroom_name', 'logo', 'latitude', 'langitude'], 'string', 'max' => 100],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppCity::className(), 'targetAttribute' => ['city_id' => 'city_id']],
            [['leasing_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppListLeasing::className(), 'targetAttribute' => ['leasing_id' => 'id']],
            [['provinci_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppProvince::className(), 'targetAttribute' => ['provinci_id' => 'province_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provinci_id' => 'Provinsi ID',
            'city_id' => 'City ID',
            'leasing_id' => 'Leasing ID',
            'showroom_name' => 'Showroom Name',
            'logo' => 'Logo',
            'phone_1' => 'Phone 1',
            'phone_2' => 'Phone_2',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['showroom_id' => 'id']);
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
    public function getLeasing()
    {
        return $this->hasOne(AppListLeasing::className(), ['id' => 'leasing_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinci()
    {
        return $this->hasOne(AppProvince::className(), ['province_id' => 'provinci_id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        return true;
    }
    public function getProvinsi(){
        return $this->hasOne(AppProvince::className(), ['province_id' => 'provinci_id']);
    }

    public function getKota(){
        return $this->hasOne(AppCity::className(), ['city_id' => 'city_id']);
    }
}
