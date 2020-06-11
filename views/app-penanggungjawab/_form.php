<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppPenanggungjawab */
/* @var $form yii\widgets\ActiveForma */
?>

<div class="app-penanggungjawab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <?= $form->field($model, 'id_showroom')->textInput() ?>

<!--     <?= $form->field($model, 'created_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
