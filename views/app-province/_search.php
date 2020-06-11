<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppProvinceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-province-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'province_id') ?>

    <?= $form->field($model, 'province_name') ?>

    <?= $form->field($model, 'province_code') ?>

    <?= $form->field($model, 'area_tab') ?>

    <?= $form->field($model, 'counter') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
