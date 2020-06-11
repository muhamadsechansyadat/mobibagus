<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_petugas".
 *
 * @property string $id
 * @property string $nama
 * @property string $telepon
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property int $status
 */
class AppPetugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['status'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['telepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'telepon' => 'Telepon',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'status' => 'Status',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = date('Y-m-d');
            $this->updated_at = date('Y-m-d');
        }
        return true;
    }

    public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getListPetugas($t=null){
            $datalistPetugas = AppPetugas::model()->findAll();
            
            if(isset($datalistPetugas)){
                foreach($datalistPetugas as $k=>$v){
                    if($v['nama'] != ''){
                        $listPetugas[$v['id']] = $v['name'];
                    }
                }
            }
            
            if($t!=null)
                return $listPetugas[$t];
            return $listPetugas;
        }
}
