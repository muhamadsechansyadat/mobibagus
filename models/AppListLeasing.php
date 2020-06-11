<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_list_leasing".
 *
 * @property int $id
 * @property string $leasing_name
 * @property string $logo
 *
 * @property AppListShowroom[] $appListShowrooms
 */
class AppListLeasing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_list_leasing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['leasing_name'], 'string', 'max' => 100],
            [['logo'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'leasing_name' => 'Leasing Name',
            'logo' => 'Logo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppListShowrooms()
    {
        return $this->hasMany(AppListShowroom::className(), ['leasing_id' => 'id']);
    }
}
