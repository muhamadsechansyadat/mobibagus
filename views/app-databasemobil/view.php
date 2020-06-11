<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AppDatabasemobil */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'App Databasemobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-databasemobil-view">

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
            'user_id',
            'showroom_id',
            'title',
            'slug:ntext',
            'id_kota',
            'status_harga',
            'harga',
            'nego',
            'merek',
            'model',
            'tipe',
            'transmisi',
            'event',
            'hall',
            'bahanbakar',
            'kondisikendaraan',
            'warna',
            'velg_ban',
            'tahun',
            'kilometer',
            'kapasitas',
            'plat',
            'sistemroda',
            'masa_stnk:ntext',
            'description:ntext',
            'status',
            'sold',
            'img_default:ntext',
            'img_1:ntext',
            'img_2:ntext',
            'img_3:ntext',
            'img_4:ntext',
            'img_5:ntext',
            'img_6:ntext',
            'img_7:ntext',
            'img_8:ntext',
            'img_9:ntext',
            'img_10:ntext',
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
            'condition',
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
            'ads_premium',
            'ads_premium_date',
            'last_update',
            'last_update_by',
            'terpopuler',
            'tampilkan_plat',
            'user_create',
            'video',
            'source',
            'datecreated',
        ],
    ]) ?>

</div>
