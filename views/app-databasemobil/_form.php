<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppDatabasemobil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-databasemobil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList($listUser,['prompt' => '--Select User--']); ?>

    <?= $form->field($model, 'showroom_id')->dropDownList($listShowroom,['prompt' => '--Select Showroom--']); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

   <!--  <?= $form->field($model, 'slug')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model, 'id_kota')->dropDownList($listCity,['prompt' => '--Select City--']) ?>

    <?= $form->field($model, 'status_harga')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nego')->textInput() ?>

    <?= $form->field($model, 'merek')->dropDownList($listMerek,['prompt' => '--Select Merek--']); ?>

    <?= $form->field($model, 'model')->dropDownList($listModel1,['prompt' => '--Select Model--']); ?>

    <?= $form->field($model, 'tipe')->dropDownList($listTipe,['prompt' => '--Select Tipe--']); ?>

    <?= $form->field($model, 'transmisi')->textInput() ?>

    <?= $form->field($model, 'event')->dropDownList([ '0' => 'IIMS', '1' => 'GIIAS'], ['prompt' => '-- Select Event --']) ?>

    <?= $form->field($model, 'hall')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bahanbakar')->textInput() ?>

    <?= $form->field($model, 'kondisikendaraan')->textInput() ?>

    <?= $form->field($model, 'warna')->dropDownList($listWarna,['prompt' => '--Select Warna--']) ?>

    <?= $form->field($model, 'velg_ban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kilometer')->textInput() ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'plat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sistemroda')->textInput() ?>

    <?= $form->field($model, 'masa_stnk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList(['prompt'=>'-- Select Status --',''=>'','0'=>'Online','1'=>'terjual','3'=>'Offline']) ?>

    <?= $form->field($model, 'sold')->dropDownList([ '0' => 'tersedia', '1' => 'terjual'], ['prompt' => '-- Select Sold --']) ?>

    <?= $form->field($model, 'img_default')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_9')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_10')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'counter_view')->textInput() ?>

    <?= $form->field($model, 'last_view')->textInput() ?>

    <?= $form->field($model, 'ads_solddate')->textInput() ?>

    <?= $form->field($model, 'prov_id')->textInput() ?>

     <?= $form->field($model, 'city_id')->dropDownList($listCity,['prompt' => '--Select City--']) ?>

    <?= $form->field($model, 'car_district_id')->textInput() ?>

    <?= $form->field($model, 'sales_lf_id')->textInput() ?>

    <?= $form->field($model, 'sales_lf_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sales_lf_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sales_lf_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doors')->textInput() ?>

    <?= $form->field($model, 'seats')->textInput() ?>

    <?= $form->field($model, 'power_steering')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'condition')->dropDownList([ '0' => 'Near New', '1' => 'Very Good', '2' => 'Good', '3' => 'Fair', '4' => 'Need Repair', '5' => 'Non Functional', '6' => 'Baru'], ['prompt' => '-- Select Condition --']) ?>

    <?= $form->field($model, 'plat_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plat_end')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seller_fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seller_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_agent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ads_registration')->textInput() ?>

    <?= $form->field($model, 'ads_confirm')->textInput() ?>

    <?= $form->field($model, 'ads_active')->textInput() ?>

    <?= $form->field($model, 'ads_expired')->textInput() ?>

    <?= $form->field($model, 'ads_pending')->textInput() ?>

    <?= $form->field($model, 'ads_edited')->textInput() ?>

    <?= $form->field($model, 'ads_first_active')->textInput() ?>

    <?= $form->field($model, 'ads_last_renew')->textInput() ?>

    <?= $form->field($model, 'ads_renew')->textInput() ?>

    <?= $form->field($model, 'ads_premium')->dropDownList([ '0' => 'Regular', '1' => 'Premium', '2' => 'Kings'], ['prompt' => '-- Select ADS Premium --']) ?>

    <?= $form->field($model, 'ads_premium_date')->textInput() ?>


    <?= $form->field($model, 'last_update_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terpopuler')->textInput() ?>

    <?= $form->field($model, 'tampilkan_plat')->dropDownList([ '0' => 'Tidak', '1' => 'Ya'], ['prompt' => '-- Select Tampilkan Plat --']) ?>

    <?= $form->field($model, 'user_create')->textInput() ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
