<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_model".
 *
 * @property int $id
 * @property string $datecreated
 * @property string $name
 * @property string $description_baru
 * @property string $description_bekas
 * @property string $review
 * @property int $id_merek
 * @property int $id_body
 * @property string $img_1
 * @property string $img_1260
 * @property string $img_600
 * @property int $popular
 * @property string $ispremium
 * @property string $seo_h1
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keyword
 * @property string $fuel_system info cc mobil, dirubah permintaan mas dreas
 * @property string $body_type info body
 * @property string $fuel_type info bahan bakar
 * @property string $seating_person info jumlah penumpang
 * @property int $allow_promo
 * @property int $status 0: tampil, 1: tidak tampil, 2: deleted
 *
 * @property AppDatabasemobil[] $appDatabasemobils
 */
class AppModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_bekas', 'review', 'id_merek', 'img_1260', 'img_600', 'popular'], 'required'],
            [['datecreated'], 'safe'],
            [['description_baru', 'description_bekas', 'review', 'img_1', 'img_1260', 'img_600', 'ispremium'], 'string'],
            [['id_merek', 'id_body', 'popular', 'allow_promo', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['seo_h1'], 'string', 'max' => 60],
            [['seo_title'], 'string', 'max' => 55],
            [['seo_description', 'seo_keyword'], 'string', 'max' => 160],
            [['fuel_system', 'body_type', 'fuel_type', 'seating_person'], 'string', 'max' => 50],
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
            'description_baru' => 'Description Baru',
            'description_bekas' => 'Description Bekas',
            'review' => 'Review',
            'id_merek' => 'Id Merek',
            'id_body' => 'Id Body',
            'img_1' => 'Img 1',
            'img_1260' => 'Img 1260',
            'img_600' => 'Img 600',
            'popular' => 'Popular',
            'ispremium' => 'Ispremium',
            'seo_h1' => 'Seo H1',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keyword' => 'Seo Keyword',
            'fuel_system' => 'Fuel System',
            'body_type' => 'Body Type',
            'fuel_type' => 'Fuel Type',
            'seating_person' => 'Seating Person',
            'allow_promo' => 'Allow Promo',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppDatabasemobils()
    {
        return $this->hasMany(AppDatabasemobil::className(), ['model' => 'id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->datecreated = date('Y-m-d H:i:s');
        }
        return true;
    }
}
