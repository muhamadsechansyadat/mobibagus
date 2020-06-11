<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_province".
 *
 * @property int $province_id
 * @property string $province_name
 * @property string $province_code
 * @property int $area_tab
 * @property int $counter
 * @property int $status 0: tidak tampil, 1: tampil, 2:dihapus
 *
 * @property AppCity[] $appCities
 * @property AppDatabasemobil[] $appDatabasemobils
 * @property AppListShowroom[] $appListShowrooms
 */
class AppProvince extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_name', 'province_code'], 'required'],
            [['area_tab', 'counter', 'status'], 'integer'],
            [['province_name'], 'string', 'max' => 255],
            [['province_code'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'province_code' => 'Province Code',
            'area_tab' => 'Area Tab',
            'counter' => 'Counter',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppCities()
    {
        return $this->hasMany(AppCity::className(), ['province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['prov_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppListShowrooms()
    {
        return $this->hasMany(AppListShowroom::className(), ['provinci_id' => 'province_id']);
    }
}
