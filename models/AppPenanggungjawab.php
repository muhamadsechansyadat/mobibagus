<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_penanggungjawab".
 *
 * @property string $id
 * @property int $id_petugas
 * @property int $id_showroom
 * @property string $created_at
 */
class AppPenanggungjawab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_penanggungjawab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_petugas','id_showroom'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_petugas' => 'Id Petugas',
            'id_showroom' => 'Id Showroom',
            'created_at' => 'Created At',
        ];
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = date('Y-m-d');
            // $this->updated_at = date('Y-m-d');
        }
        return true;
    }
}
