<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_merek".
 *
 * @property int $id
 * @property string $datecreated
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $description_history
 * @property string $img_1
 * @property string $img_car_sample
 * @property int $counter
 * @property string $logo
 * @property int $popular
 * @property string $seo_desc_baru
 * @property string $seo_desc_bekas
 * @property int $status 0: tampil, 1: tidak tampil, 2: deleted
 *
 * @property AppDatabasemobil[] $appDatabasemobils
 */
class AppMerek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_merek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_history', 'counter', 'logo', 'popular', 'seo_desc_baru', 'seo_desc_bekas'], 'required'],
            [['datecreated'], 'safe'],
            [['description_history', 'img_1', 'img_car_sample', 'logo', 'seo_desc_baru', 'seo_desc_bekas'], 'string'],
            [['counter', 'popular', 'status'], 'integer'],
            [['name', 'slug', 'description'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'slug' => 'Slug',
            'description' => 'Description',
            'description_history' => 'Description History',
            'img_1' => 'Img 1',
            'img_car_sample' => 'Img Car Sample',
            'counter' => 'Counter',
            'logo' => 'Logo',
            'popular' => 'Popular',
            'seo_desc_baru' => 'Seo Desc Baru',
            'seo_desc_bekas' => 'Seo Desc Bekas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['merek' => 'id']);
    }

     public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $slug = strtolower($this->name);
            $slug = str_replace(array(' ', '+', '=', '"', '(', ')'), '-', $slug);
            $this->slug = $slug;
            
            $this->datecreated = date('Y-m-d H:i:s');
        }
        return true;
    }
}
