<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\AppTipe */
/* @var $form yii\widgets\ActiveForm */

$models = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
$listModel1 = ArrayHelper::map($models, 'id', 'name');

?>

<div class="app-tipe-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'datecreated')->textInput() ?> -->

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'id_merek')->dropDownList(
        $listMerek,
        ['prompt' => '--Select Merek--']
    );?>

    <?= $form->field($model, 'id_model')->dropDownList(
        $listModel1,
        ['prompt' => '--Select Model--']
    ); ?>

    <?= $form->field($model, 'cc')->textInput() ?>

    <?= $form->field($model, 'seats')->textInput() ?>

    <?= $form->field($model, 'transmission')->dropDownList([ '0' => 'Manual', '1' => 'Automatic', '2' => 'CVT'], ['prompt' => '']) ?>

    <?= $form->field($model, 'doors')->textInput() ?>

    <?= $form->field($model, 'engine_cylinder')->textInput() ?>

    <?= $form->field($model, 'wheels')->dropDownList([ '0' => '2WD', '1' => '4WD', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'power_steering')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'img_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'aktif' => 'Aktif', 'reject' => 'Reject', 'request' => 'Request'], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$url_model = Yii::$app->urlManager->createUrl(['app-tipe/carimodel']);
$this->registerJs(
    "$('#apptipe-id_merek').on('change', function() { 
            var merk = $('#apptipe-id_merek').val(); 
            var url = '" . $url_model . "';
            var mydata = {id : merk};
            $.ajax({
                type: 'POST',
                url : url,
                data : mydata,
                dataType: 'json',
                success:function(model) {
                    console.log(model);
                    $.each(model, function (i, Obj) {
                        $('#apptipe-id_model').empty();
                        $.each(model, function (i, Obj) {
                            $('#apptipe-id_model').append('<option value=\"' + Obj.id + '\">' + Obj.name + '</option>');
                        });
                    });
                },
                error: function(hasil) {
                    //alert('Error occured.please try again');
                    console.log(hasil);
                },
            });
        }); 
        ",
    View::POS_READY,
    'my-button-handler'
);
?>
