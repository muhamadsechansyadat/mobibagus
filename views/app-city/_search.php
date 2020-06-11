<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppCitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-city-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'province_id') ?>

    <?= $form->field($model, 'city_name') ?>

    <?= $form->field($model, 'area_tab') ?>

    <?= $form->field($model, 'counter') ?>

    <?php // echo $form->field($model, 'use_promo') ?>

    <?php // echo $form->field($model, 'popular') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
