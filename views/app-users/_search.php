<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppUsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'subdomain') ?>

    <?= $form->field($model, 'date_created') ?>

    <?= $form->field($model, 'date_modified') ?>

    <?= $form->field($model, 'id_mobil88_cabang') ?>

    <?php // echo $form->field($model, 'id_dealer') ?>

    <?php // echo $form->field($model, 'fullname') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'username_lama') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'description_service') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'phone_2') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'tipe_penjual') ?>

    <?php // echo $form->field($model, 'is_premium') ?>

    <?php // echo $form->field($model, 'jenis_showroom') ?>

    <?php // echo $form->field($model, 'hari_kerja') ?>

    <?php // echo $form->field($model, 'jam_kerja') ?>

    <?php // echo $form->field($model, 'client_prov_id') ?>

    <?php // echo $form->field($model, 'client_city_id') ?>

    <?php // echo $form->field($model, 'client_district_id') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'img_2') ?>

    <?php // echo $form->field($model, 'img_3') ?>

    <?php // echo $form->field($model, 'img_4') ?>

    <?php // echo $form->field($model, 'img_5') ?>

    <?php // echo $form->field($model, 'img_6') ?>

    <?php // echo $form->field($model, 'img_7') ?>

    <?php // echo $form->field($model, 'img_8') ?>

    <?php // echo $form->field($model, 'img_9') ?>

    <?php // echo $form->field($model, 'img_10') ?>

    <?php // echo $form->field($model, 'phone_3') ?>

    <?php // echo $form->field($model, 'phone_4') ?>

    <?php // echo $form->field($model, 'img_1_service') ?>

    <?php // echo $form->field($model, 'img_2_service') ?>

    <?php // echo $form->field($model, 'img_3_service') ?>

    <?php // echo $form->field($model, 'img_4_service') ?>

    <?php // echo $form->field($model, 'img_5_service') ?>

    <?php // echo $form->field($model, 'img_6_service') ?>

    <?php // echo $form->field($model, 'img_7_service') ?>

    <?php // echo $form->field($model, 'img_8_service') ?>

    <?php // echo $form->field($model, 'img_9_service') ?>

    <?php // echo $form->field($model, 'img_10_service') ?>

    <?php // echo $form->field($model, 'desc_1') ?>

    <?php // echo $form->field($model, 'desc_2') ?>

    <?php // echo $form->field($model, 'desc_3') ?>

    <?php // echo $form->field($model, 'desc_4') ?>

    <?php // echo $form->field($model, 'desc_5') ?>

    <?php // echo $form->field($model, 'desc_6') ?>

    <?php // echo $form->field($model, 'desc_7') ?>

    <?php // echo $form->field($model, 'desc_8') ?>

    <?php // echo $form->field($model, 'desc_9') ?>

    <?php // echo $form->field($model, 'desc_10') ?>

    <?php // echo $form->field($model, 'desc_1_service') ?>

    <?php // echo $form->field($model, 'desc_2_service') ?>

    <?php // echo $form->field($model, 'desc_3_service') ?>

    <?php // echo $form->field($model, 'desc_4_service') ?>

    <?php // echo $form->field($model, 'desc_5_service') ?>

    <?php // echo $form->field($model, 'desc_6_service') ?>

    <?php // echo $form->field($model, 'desc_7_service') ?>

    <?php // echo $form->field($model, 'desc_8_service') ?>

    <?php // echo $form->field($model, 'desc_9_service') ?>

    <?php // echo $form->field($model, 'desc_10_service') ?>

    <?php // echo $form->field($model, 'cover_facility') ?>

    <?php // echo $form->field($model, 'cover_list_car') ?>

    <?php // echo $form->field($model, 'cover_staff') ?>

    <?php // echo $form->field($model, 'cover') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'headercolor') ?>

    <?php // echo $form->field($model, 'desc_img_showroom') ?>

    <?php // echo $form->field($model, 'sales_showroom') ?>

    <?php // echo $form->field($model, 'gallery_showroom') ?>

    <?php // echo $form->field($model, 'lastlogin') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'status_update') ?>

    <?php // echo $form->field($model, 'vernumber') ?>

    <?php // echo $form->field($model, 'sales_listing_id') ?>

    <?php // echo $form->field($model, 'total_ads') ?>

    <?php // echo $form->field($model, 'sn_id') ?>

    <?php // echo $form->field($model, 'counterview') ?>

    <?php // echo $form->field($model, 'waktu_kunjungan_terakhir') ?>

    <?php // echo $form->field($model, 'waktu_kunjungan_sebelumnya') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'langitude') ?>

    <?php // echo $form->field($model, 'wa') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'gcm_id') ?>

    <?php // echo $form->field($model, 'auth_key') ?>

    <?php // echo $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'device_type') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'mediasosial_id') ?>

    <?php // echo $form->field($model, 'media_lainnya') ?>

    <?php // echo $form->field($model, 'flag_ho') ?>

    <?php // echo $form->field($model, 'flag_dealer') ?>

    <?php // echo $form->field($model, 'background_profile') ?>

    <?php // echo $form->field($model, 'domain') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
