<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppDatabasemobilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-databasemobil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'showroom_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'id_kota') ?>

    <?php // echo $form->field($model, 'status_harga') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'nego') ?>

    <?php // echo $form->field($model, 'merek') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'tipe') ?>

    <?php // echo $form->field($model, 'transmisi') ?>

    <?php // echo $form->field($model, 'event') ?>

    <?php // echo $form->field($model, 'hall') ?>

    <?php // echo $form->field($model, 'bahanbakar') ?>

    <?php // echo $form->field($model, 'kondisikendaraan') ?>

    <?php // echo $form->field($model, 'warna') ?>

    <?php // echo $form->field($model, 'velg_ban') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'kilometer') ?>

    <?php // echo $form->field($model, 'kapasitas') ?>

    <?php // echo $form->field($model, 'plat') ?>

    <?php // echo $form->field($model, 'sistemroda') ?>

    <?php // echo $form->field($model, 'masa_stnk') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'sold') ?>

    <?php // echo $form->field($model, 'img_default') ?>

    <?php // echo $form->field($model, 'img_1') ?>

    <?php // echo $form->field($model, 'img_2') ?>

    <?php // echo $form->field($model, 'img_3') ?>

    <?php // echo $form->field($model, 'img_4') ?>

    <?php // echo $form->field($model, 'img_5') ?>

    <?php // echo $form->field($model, 'img_6') ?>

    <?php // echo $form->field($model, 'img_7') ?>

    <?php // echo $form->field($model, 'img_8') ?>

    <?php // echo $form->field($model, 'img_9') ?>

    <?php // echo $form->field($model, 'img_10') ?>

    <?php // echo $form->field($model, 'counter_view') ?>

    <?php // echo $form->field($model, 'last_view') ?>

    <?php // echo $form->field($model, 'ads_solddate') ?>

    <?php // echo $form->field($model, 'prov_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'car_district_id') ?>

    <?php // echo $form->field($model, 'sales_lf_id') ?>

    <?php // echo $form->field($model, 'sales_lf_name') ?>

    <?php // echo $form->field($model, 'sales_lf_email') ?>

    <?php // echo $form->field($model, 'sales_lf_phone') ?>

    <?php // echo $form->field($model, 'doors') ?>

    <?php // echo $form->field($model, 'seats') ?>

    <?php // echo $form->field($model, 'power_steering') ?>

    <?php // echo $form->field($model, 'condition') ?>

    <?php // echo $form->field($model, 'plat_start') ?>

    <?php // echo $form->field($model, 'plat_end') ?>

    <?php // echo $form->field($model, 'notification') ?>

    <?php // echo $form->field($model, 'seller_fullname') ?>

    <?php // echo $form->field($model, 'seller_email') ?>

    <?php // echo $form->field($model, 'user_agent') ?>

    <?php // echo $form->field($model, 'user_ip') ?>

    <?php // echo $form->field($model, 'ads_registration') ?>

    <?php // echo $form->field($model, 'ads_confirm') ?>

    <?php // echo $form->field($model, 'ads_active') ?>

    <?php // echo $form->field($model, 'ads_expired') ?>

    <?php // echo $form->field($model, 'ads_pending') ?>

    <?php // echo $form->field($model, 'ads_edited') ?>

    <?php // echo $form->field($model, 'ads_first_active') ?>

    <?php // echo $form->field($model, 'ads_last_renew') ?>

    <?php // echo $form->field($model, 'ads_renew') ?>

    <?php // echo $form->field($model, 'ads_premium') ?>

    <?php // echo $form->field($model, 'ads_premium_date') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'last_update_by') ?>

    <?php // echo $form->field($model, 'terpopuler') ?>

    <?php // echo $form->field($model, 'tampilkan_plat') ?>

    <?php // echo $form->field($model, 'user_create') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'datecreated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
