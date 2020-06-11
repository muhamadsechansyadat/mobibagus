<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "app_tipe".
 *
 * @property int $id
 * @property string $datecreated
 * @property string $name
 * @property string $description
 * @property int $id_merek
 * @property int $id_model
 * @property int $cc
 * @property int $seats
 * @property int $transmission refferal ko reff_spec -> 0:manual;1:automatic;2:CVT
 * @property int $doors
 * @property int $engine_cylinder
 * @property int $wheels 0:2WD;1:4WD
 * @property string $power_steering
 * @property string $img_1
 * @property string $status
 *
 * @property AppDatabasemobil[] $appDatabasemobils
 */
class AppTipe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_tipe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_merek', 'id_model', 'transmission', 'img_1'], 'required'],
            [['datecreated'], 'safe'],
            [['id_merek', 'id_model', 'cc', 'seats', 'transmission', 'doors', 'engine_cylinder', 'wheels'], 'integer'],
            [['power_steering', 'img_1'], 'string'],
            [['name', 'description'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datecreated' => 'Datecreated',
            'name' => 'Name',
            'description' => 'Description',
            'id_merek' => 'Id Merek',
            'id_model' => 'Id Model',
            'cc' => 'Cc',
            'seats' => 'Seats',
            'transmission' => 'Transmission',
            'doors' => 'Doors',
            'engine_cylinder' => 'Engine Cylinder',
            'wheels' => 'Wheels',
            'power_steering' => 'Power Steering',
            'img_1' => 'Img 1',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['tipe' => 'id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->datecreated = date('Y-m-d H:i:s');
        }
        return true;
    }
    public function getMerek(){
        return $this->hasOne(AppMerek::className(), ['id' => 'id_merek']);
    }

    public function getModel(){
        return $this->hasOne(AppModel::className(), ['id' => 'id_model']);
    }
}
