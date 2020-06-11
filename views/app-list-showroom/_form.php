<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\AppListShowroom */
/* @var $form yii\widgets\ActiveForm */

$city1 = \app\models\AppCity::find()->orderBy(['city_name' => SORT_ASC])->all();
$listCity1 = ArrayHelper::map($city1, 'city_id', 'city_name');

?>

<div class="app-list-showroom-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'provinci_id')->dropDownList($listProvinsi, ['prompt' => '--Select Province--']); ?>

    <?= $form->field($model, 'city_id')->dropDownList($listCity1, ['prompt' => '--Select City--']); ?>

    <?= $form->field($model, 'leasing_id')->dropDownList($listLeasing, ['prompt' => '--Select Leasing--']); ?>

    <?= $form->field($model, 'showroom_name')->textInput(['maxlength' => true]) ?>

    

     <?= $form->field($model, 'logo')->textInput(); ?>
      

    <?= $form->field($model, 'phone_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Aktif', '2' => 'Tidak Aktif', ], ['prompt' => '']) ?>
    
    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'langitude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url_kota = Yii::$app->urlManager->createUrl(['app-list-showroom/carikota']);
$this->registerJs(
    "
       $('#applistshowroom-provinci_id').on('change', function() { 
            var kota = $('#applistshowroom-provinci_id').val(); 
            var url = '" . $url_kota . "';
            var mydata = {id : kota};
            $.ajax({
                type: 'POST',
                url : url,
                data : mydata,
                dataType: 'json',
                success:function(kota) {
                    console.log(kota);
                    $.each(kota, function (i, Obj) {
                        $('#applistshowroom-city_id').empty();
                        $.each(kota, function (i, Obj) {
                            $('#applistshowroom-city_id').append('<option value=\"' + Obj.city_id + '\">' + Obj.city_name + '</option>');
                        });
                    });
                },
                error: function(kota) {
                    //alert('Error occured.please try again');
                    console.log(kota);
                },
            });
        }); 
        ",
    View::POS_READY,
    'my-button-handler'
);
?>   