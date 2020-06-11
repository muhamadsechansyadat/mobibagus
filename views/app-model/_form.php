<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_baru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_bekas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'review')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_merek')->dropDownList($listIdmerek, ['prompt' => '']) ?>

    <?= $form->field($model, 'id_body')->textInput() ?>

    <?= $form->field($model, 'img_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_1260')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_600')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'popular')->textInput() ?>

    <?= $form->field($model, 'ispremium')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seo_h1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seating_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allow_promo')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
