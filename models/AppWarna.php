<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_warna".
 *
 * @property int $id
 * @property string $name
 *
 * @property AppDatabasemobil[] $appDatabasemobils
 */
class AppWarna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_warna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['warna' => 'id']);
    }
}
