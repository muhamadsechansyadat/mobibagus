<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AppUsers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'subdomain',
            'date_created',
            'date_modified',
            'id_mobil88_cabang',
            'id_dealer',
            'fullname',
            'username',
            'slug',
            'username_lama',
            'description:ntext',
            'description_service:ntext',
            'password',
            'email:email',
            'facebook',
            'twitter',
            'address:ntext',
            'phone',
            'phone_2',
            'gender',
            'tipe_penjual',
            'is_premium',
            'jenis_showroom',
            'hari_kerja',
            'jam_kerja',
            'client_prov_id',
            'client_city_id',
            'client_district_id',
            'img:ntext',
            'img_2:ntext',
            'img_3:ntext',
            'img_4:ntext',
            'img_5:ntext',
            'img_6:ntext',
            'img_7:ntext',
            'img_8:ntext',
            'img_9:ntext',
            'img_10:ntext',
            'phone_3',
            'phone_4',
            'img_1_service:ntext',
            'img_2_service:ntext',
            'img_3_service:ntext',
            'img_4_service:ntext',
            'img_5_service:ntext',
            'img_6_service:ntext',
            'img_7_service:ntext',
            'img_8_service:ntext',
            'img_9_service:ntext',
            'img_10_service:ntext',
            'desc_1:ntext',
            'desc_2:ntext',
            'desc_3:ntext',
            'desc_4:ntext',
            'desc_5:ntext',
            'desc_6:ntext',
            'desc_7:ntext',
            'desc_8:ntext',
            'desc_9:ntext',
            'desc_10:ntext',
            'desc_1_service:ntext',
            'desc_2_service:ntext',
            'desc_3_service:ntext',
            'desc_4_service:ntext',
            'desc_5_service:ntext',
            'desc_6_service:ntext',
            'desc_7_service:ntext',
            'desc_8_service:ntext',
            'desc_9_service:ntext',
            'desc_10_service:ntext',
            'cover_facility',
            'cover_list_car',
            'cover_staff',
            'cover:ntext',
            'logo:ntext',
            'headercolor',
            'desc_img_showroom:ntext',
            'sales_showroom:ntext',
            'gallery_showroom:ntext',
            'lastlogin',
            'status',
            'status_update',
            'vernumber',
            'sales_listing_id',
            'total_ads',
            'sn_id',
            'counterview',
            'waktu_kunjungan_terakhir',
            'waktu_kunjungan_sebelumnya',
            'latitude',
            'langitude',
            'wa',
            'bb',
            'gcm_id:ntext',
            'auth_key',
            'password_reset_token',
            'device_type',
            'user_id',
            'mediasosial_id',
            'media_lainnya',
            'flag_ho',
            'flag_dealer',
            'background_profile',
            'domain',
            'city_id',
            'longitude',
        ],
    ]) ?>

</div>
