<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_reff_spec".
 *
 * @property int $id
 * @property string $keterangan
 * @property string $category
 */
class AppReffSpec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_reff_spec';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['keterangan', 'category'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keterangan' => 'Keterangan',
            'category' => 'Category',
        ];
    }
}
