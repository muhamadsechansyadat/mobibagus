<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppCity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province_id')->textInput() ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_tab')->textInput() ?>

    <?= $form->field($model, 'counter')->textInput() ?>

    <?= $form->field($model, 'use_promo')->textInput() ?>

    <?= $form->field($model, 'popular')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
