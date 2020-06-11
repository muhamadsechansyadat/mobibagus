<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppMerekSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-merek-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'datecreated') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'description_history') ?>

    <?php // echo $form->field($model, 'img_1') ?>

    <?php // echo $form->field($model, 'img_car_sample') ?>

    <?php // echo $form->field($model, 'counter') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'popular') ?>

    <?php // echo $form->field($model, 'seo_desc_baru') ?>

    <?php // echo $form->field($model, 'seo_desc_bekas') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
