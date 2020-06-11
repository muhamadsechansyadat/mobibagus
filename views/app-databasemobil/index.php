<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppDatabasemobilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Databasemobils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-databasemobil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Databasemobil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'user_id',
            'showroom_id',
            'title',
            'slug:ntext',
            'id_kota',
            'status_harga',
            'harga',
            'nego',
            // 'merek',
            // 'model',
            // 'tipe',
            [
                'attribute' => 'merek',
                'header' => 'ID Merek',
                'filter' => $listMerek,
                'value' => function ($data) {
                    $sql = "SELECT merek.id, merek.name
                            FROM app_merek merek
                            WHERE merek.id=" . $data->merek;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["name"];
                    return $result;
                },
            ],
            [
                'attribute' => 'model',
                'header' => 'ID Model',
                'filter' => $listModel1,
                'value' => function ($data) {
                    $sql = "SELECT model1.id, model1.name
                            FROM app_model model1
                            WHERE model1.id=" . $data->merek;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["name"];
                    return $result;
                },
            ],
            [
                'attribute' => 'tipe',
                'header' => 'ID Tipe',
                'filter' => $listTipe,
                'value' => function ($data) {
                    $sql = "SELECT type.id, type.name
                            FROM app_tipe type
                            WHERE type.id=" . $data->tipe;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["name"];
                    return $result;
                },
            ],
            'transmisi',
            [
                'attribute' => 'event',
                'header' => 'Event',
                'filter' => ['1' => 'GIIAS', '0' => 'IIMS'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->event == '1') {
                        return '<span class="' . $model->event . '" style="color:green">GIIAS</span>';
                    } else {
                        return '<span class="' . $model->event . '" style="color:black">IIMS</span>';
                    }
                },
            ],
            'hall',
            'bahanbakar',
            'kondisikendaraan',
            [
                'attribute' => 'warna',
                'header' => 'ID Warna',
                'filter' => $listWarna,
                'value' => function ($data) {
                    $sql = "SELECT warna.id, warna.name
                            FROM app_warna warna
                            WHERE warna.id=" . $data->warna;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["name"];
                    return $result;
                },
            ],
            'velg_ban',
            'tahun',
            'kilometer',
            'kapasitas',
            'plat',
            'sistemroda',
            'masa_stnk:ntext',
            'description:ntext',
            [
                'attribute' => 'status',
                'header' => 'Status',
                'filter' => ['3' => 'Offline','2'=>'Konfirmasi','1'=>'Terjual', '0' => 'Online'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->event == '0') {
                        return '<span class="' . $model->event . '" style="color:green">Online</span>';
                    } elseif ($model->event == '1') {
                        return '<span class="' . $model->event . '" style="color:black">Terjual</span>';
                    }elseif ($model->event == '2') {
                        return '<span class="' . $model->event . '" style="color:black">Konfirmasi</span>';
                    }else {
                        return '<span class="' . $model->event . '" style="color:black">Offline</span>';
                    }
                },
            ],
            [
                'attribute' => 'sold',
                'header' => 'Sold',
                'filter' => ['1' => 'Terjual', '0' => 'Tersedia'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->sold == '1') {
                        return '<span class="' . $model->event . '" style="">Terjual</span>';
                    } else {
                        return '<span class="' . $model->event . '" style="">Tersedia</span>';
                    }
                },
            ],
            'img_default:ntext',
            [
                'attribute' => 'img_1',
                'format' => 'html',
                'label' => 'Img 1',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_1;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_2',
                'format' => 'html',
                'label' => 'Img 2',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_2;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_3',
                'format' => 'html',
                'label' => 'Img 3',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_3;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_4',
                'format' => 'html',
                'label' => 'Img 4',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_4;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_5',
                'format' => 'html',
                'label' => 'Img 5',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_5;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_6',
                'format' => 'html',
                'label' => 'Img 6',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_6;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_7',
                'format' => 'html',
                'label' => 'Img 7',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_7;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_8',
                'format' => 'html',
                'label' => 'Img 8',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_8;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_9',
                'format' => 'html',
                'label' => 'Img 9',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_9;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'img_10',
                'format' => 'html',
                'label' => 'Img 10',
                'value' => function ($data) {
                    $sql = "Select id, user_id from app_databasemobil where user_id = " . $data->user_id;

                    $user_id = Yii::$app->db->createCommand($sql)->queryOne()["user_id"];
                    $url = 'https://s3.ap-southeast-1.amazonaws.com/ramo-statics/finances-feature/muf/iklan/' . $user_id . '/' . $data->img_10;
                    // var_dump($url);die;
                    return Html::img($url,
                        ['width' => '100px']);
                },
            ],
            'counter_view',
            'last_view',
            'ads_solddate',
            'prov_id',
            'city_id',
            'car_district_id',
            'sales_lf_id',
            'sales_lf_name',
            'sales_lf_email:email',
            'sales_lf_phone',
            'doors',
            'seats',
            'power_steering',
            [
                'attribute' => 'condition',
                'header' => 'Condition',
                'filter' => ['0' => 'Near New', '1' => 'Very Good', '2' => 'Good', '3' => 'Fair', '4' => 'Need Repair', '5' => 'non-Functional', '6' => 'new'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->condition == '0') {
                        return '<span class="' . $model->condition . '" style="color:green">Near New</span>';
                    } elseif ($model->condition == '1') {
                        return '<span class="' . $model->condition . '" style="color:black">Very Good</span>';
                    } elseif ($model->condition == '2'){
                        return '<span class="' . $model->condition . '" style="color:black">Good</span>';
                    }elseif ($model->condition == '3'){
                        return '<span class="' . $model->condition . '" style="color:black">Fair</span>';
                    }elseif ($model->condition == '4'){
                        return '<span class="' . $model->condition . '" style="color:black">Need Repair</span>';
                    }elseif ($model->condition == '5'){
                        return '<span class="' . $model->condition . '" style="color:black">Non Functional</span>';
                    }else{
                         return '<span class="' . $model->condition . '" style="color:black">New</span>';
                    }
                },
            ],
           
            'plat_start',
            'plat_end',
            'notification:ntext',
            'seller_fullname',
            'seller_email:email',
            'user_agent:ntext',
            'user_ip:ntext',
            'ads_registration',
            'ads_confirm',
            'ads_active',
            'ads_expired',
            'ads_pending',
            'ads_edited',
            'ads_first_active',
            'ads_last_renew',
            'ads_renew',
             [
                'attribute' => 'ads_premium',
                'header' => 'ads_premium',
                'filter' => ['2' => 'kings' ,'1' => 'premium', '0' => 'regular'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->ads_premium == '2') {
                        return '<span class="' . $model->ads_premium . '" style="color:green">Kings</span>';
                    } elseif ($model->ads_premium == '1') {
                        return '<span class="' . $model->ads_premium . '" style="color:black">Premium</span>';
                    }
                    else {
                        return '<span class="' . $model->ads_premium . '" style="color:black">Regular</span>';
                    }
                },
            ],
            'ads_premium_date',
            'last_update',
            'last_update_by',
            'terpopuler',
             [
                'attribute' => 'tampilkan_plat',
                'header' => 'Tampilkan Plat',
                'filter' => ['1' => 'Ya', '0' => 'Tidak'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->tampilkan_plat == '1') {
                        return '<span class="' . $model->tampilkan_plat . '" style="color:green">Ya</span>';
                    } else {
                        return '<span class="' . $model->tampilkan_plat . '" style="color:black">Tidak</span>';
                    }
                },
            ],
            'user_create',
            'video',
            'source',
            'datecreated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
