<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppTipeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-tipe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'datecreated') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'id_merek') ?>

    <?php // echo $form->field($model, 'id_model') ?>

    <?php // echo $form->field($model, 'cc') ?>

    <?php // echo $form->field($model, 'seats') ?>

    <?php // echo $form->field($model, 'transmission') ?>

    <?php // echo $form->field($model, 'doors') ?>

    <?php // echo $form->field($model, 'engine_cylinder') ?>

    <?php // echo $form->field($model, 'wheels') ?>

    <?php // echo $form->field($model, 'power_steering') ?>

    <?php // echo $form->field($model, 'img_1') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
