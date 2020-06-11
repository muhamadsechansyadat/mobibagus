<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_city".
 *
 * @property int $city_id
 * @property int $province_id
 * @property string $city_name
 * @property int $area_tab
 * @property int $counter
 * @property int $use_promo
 * @property int $popular
 *
 * @property AppProvince $province
 * @property AppDatabasemobil[] $appDatabasemobils
 * @property AppListShowroom[] $appListShowrooms
 */
class AppCity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_id'], 'required'],
            [['province_id', 'area_tab', 'counter', 'use_promo', 'popular'], 'integer'],
            [['city_name'], 'string', 'max' => 255],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppProvince::className(), 'targetAttribute' => ['province_id' => 'province_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'province_id' => 'Province ID',
            'city_name' => 'City Name',
            'area_tab' => 'Area Tab',
            'counter' => 'Counter',
            'use_promo' => 'Use Promo',
            'popular' => 'Popular',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(AppProvince::className(), ['province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['city_id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppListShowrooms()
    {
        return $this->hasMany(AppListShowroom::className(), ['city_id' => 'city_id']);
    }
}
