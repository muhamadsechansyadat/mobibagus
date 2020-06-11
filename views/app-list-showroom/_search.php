<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppListShowroomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-list-showroom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'provinci_id') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'leasing_id') ?>

    <?= $form->field($model, 'showroom_name') ?>

    <?php echo $form->field($model, 'logo') ?>

    <?= $form->field($model, 'phone_1') ?>

    <?= $form->field($model, 'phone_2') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($moedl, 'langitude') ?>

    <?= $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
