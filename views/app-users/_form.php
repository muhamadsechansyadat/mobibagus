<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-users-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'subdomain')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'date_created')->textInput() ?> -->

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'id_mobil88_cabang')->textInput() ?>

    <?= $form->field($model, 'id_dealer')->textInput() ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username_lama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput() ?>

    <?= $form->field($model, 'tipe_penjual')->textInput() ?>

    <?= $form->field($model, 'is_premium')->textInput() ?>

    <?= $form->field($model, 'jenis_showroom')->textInput() ?>

    <?= $form->field($model, 'hari_kerja')->textInput() ?>

    <?= $form->field($model, 'jam_kerja')->textInput() ?>

    <?= $form->field($model, 'client_prov_id')->textInput() ?>

    <?= $form->field($model, 'client_city_id')->textInput() ?>

    <?= $form->field($model, 'client_district_id')->textInput() ?>

    <?= $form->field($model, 'img')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_9')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_10')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_1_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_2_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_3_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_4_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_5_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_6_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_7_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_8_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_9_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_10_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_9')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_10')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_1_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_2_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_3_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_4_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_5_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_6_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_7_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_8_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_9_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_10_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cover_facility')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cover_list_car')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cover_staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cover')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'logo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'headercolor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_img_showroom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sales_showroom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gallery_showroom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lastlogin')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'status_update')->textInput() ?>

    <?= $form->field($model, 'vernumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sales_listing_id')->textInput() ?>

    <?= $form->field($model, 'total_ads')->textInput() ?>

    <?= $form->field($model, 'sn_id')->textInput() ?>

    <?= $form->field($model, 'counterview')->textInput() ?>

    <?= $form->field($model, 'waktu_kunjungan_terakhir')->textInput() ?>

    <?= $form->field($model, 'waktu_kunjungan_sebelumnya')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'langitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wa')->textInput() ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcm_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'device_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'mediasosial_id')->textInput() ?>

    <?= $form->field($model, 'media_lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flag_ho')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'flag_dealer')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'background_profile')->fileInput() ?>

    <?= $form->field($model, 'domain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
