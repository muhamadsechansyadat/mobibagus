<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppListLeasing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-list-leasing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'leasing_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
