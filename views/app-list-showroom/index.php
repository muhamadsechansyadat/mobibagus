<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppListShowroomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App List Showrooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-list-showroom-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App List Showroom', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'provinci_id',
                'format' => 'html',
                'label' => 'Nama Provinsi',
                'filter' => $listProvinsi,
                'filterOptions' => ['class'=>'asd'],
                'value' => function ($data) {
                    $sql = "SELECT provinsi.province_id as id_provinsi, provinsi.province_name as nama_provinsi, kota.city_id as id_kota, kota.city_name as nama_kota, showroom.id as id_showroom, showroom.showroom_name as nama_showroom
                        FROM app_province provinsi
                        LEFT JOIN app_city kota ON kota.city_id = provinsi.province_id
                        LEFT JOIN app_list_showroom showroom ON showroom.provinci_id = kota.city_id
                        WHERE provinsi.province_id = " . $data->provinci_id;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["nama_provinsi"];
                    return $result;
                },
            ],
            [
                'attribute' => 'city_id',
                'format' => 'html',
                'label' => 'Nama Kota',
                'filter' => $listCity1,
                'filterOptions' => ['class'=>'asd'],
                'value' => function ($data) {
                    $sql = "SELECT provinsi.province_id as id_provinsi, provinsi.province_name as nama_provinsi, kota.city_id as id_kota, kota.city_name as nama_kota, showroom.id as id_showroom, showroom.showroom_name as nama_showroom
                        FROM app_province provinsi
                        LEFT JOIN app_city kota ON kota.city_id = provinsi.province_id
                        LEFT JOIN app_list_showroom showroom ON showroom.provinci_id = kota.city_id
                        WHERE kota.city_id = " . $data->city_id;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["nama_kota"];
                    return $result;
                },
            ],
            [
                'attribute' => 'leasing_id',
                'header' => 'Leasing ID',
                'filter' => $listLeasing,
                'value' => function ($data) {
                    $sql = "SELECT leasing.id, leasing.leasing_name
                            FROM app_list_leasing leasing
                            WHERE leasing.id=" . $data->leasing_id;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["leasing_name"];
                    return $result;
                },
            ],
            'showroom_name',
            'phone_1',
            'phone_2',

             [
                'attribute' => 'logo',
                'format' => 'html',
                'label' => 'Logo',
                'value' => function ($data) {
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/images/dealer/logo/'.str_replace(" ","-",strtolower($data->showroom_name)). '/'  . $data->logo;
                    return Html::img($url,
                        ['width' => '60px']);
                },
            ],
            [
                'attribute' => 'status',
                'header' => 'Status',
                'filter' => ['1' => 'Aktif', '2' => 'Tidak Aktif',],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->status == '1') {
                        return '<span class="' . $model->status . '" style=""> Aktif </span>';
                    } else{
                        return '<span class="' . $model->status . '" style=""> Tidak Aktif </span>';
                    }
                },
            ],
            'latitude',
            'langitude',
            'created_at',
            //'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
