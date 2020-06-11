<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppModelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'datecreated') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description_baru') ?>

    <?= $form->field($model, 'description_bekas') ?>

    <?php // echo $form->field($model, 'review') ?>

    <?php // echo $form->field($model, 'id_merek') ?>

    <?php // echo $form->field($model, 'id_body') ?>

    <?php // echo $form->field($model, 'img_1') ?>

    <?php // echo $form->field($model, 'img_1260') ?>

    <?php // echo $form->field($model, 'img_600') ?>

    <?php // echo $form->field($model, 'popular') ?>

    <?php // echo $form->field($model, 'ispremium') ?>

    <?php // echo $form->field($model, 'seo_h1') ?>

    <?php // echo $form->field($model, 'seo_title') ?>

    <?php // echo $form->field($model, 'seo_description') ?>

    <?php // echo $form->field($model, 'seo_keyword') ?>

    <?php // echo $form->field($model, 'fuel_system') ?>

    <?php // echo $form->field($model, 'body_type') ?>

    <?php // echo $form->field($model, 'fuel_type') ?>

    <?php // echo $form->field($model, 'seating_person') ?>

    <?php // echo $form->field($model, 'allow_promo') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
