<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\AppMerek */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-merek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3])  ?>

    <?= $form->field($model, 'description_history')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced'
    ]) ?>

    <?= $form->field($model, 'img_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_car_sample')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'counter')->textInput() ?>

    <?= $form->field($model, 'logo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'popular')->textInput() ?>

    <?= $form->field($model, 'seo_desc_baru')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced' 
    ])?>

    <?= $form->field($model, 'seo_desc_bekas')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced' 
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0' => 'Show', '1' => 'Not Show', '2' => 'Deleted'], ['prompt' => '']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
