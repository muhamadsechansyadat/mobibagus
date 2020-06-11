<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppTipeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Tipes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-tipe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Tipe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'datecreated',
            'name',
            'description',
            [
                'attribute' => 'id_merek',
                'format' => 'html',
                'label' => 'Merk name',
                'filter' => $listMerek,
                'filterOptions' => ['class'=>'asd'],
                'value' => function ($data) {
                    $sql = "SELECT merek.id as id_merek, merek.name as nama_merek, model.id as id_model, model.name as nama_model, tipe.id as id_tipe, tipe.name as nama_tipe
                            FROM app_merek merek
                            LEFT JOIN app_model model ON model.id_merek = merek.id
                            LEFT JOIN app_tipe tipe ON tipe.id_model = model.id
                            WHERE merek.id = " . $data->id_merek;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["nama_merek"];
                    return $result;
                },
            ],
            [
                'attribute' => 'id_model',
                'format' => 'html',
                'label' => 'Model name',
                'filter' => $listModel1,
                'value' => function ($data) {
                    $sql = "SELECT merek.id as id_merek, merek.name as nama_merek, model.id as id_model, model.name as nama_model, tipe.id as id_tipe, tipe.name as nama_tipe
                            FROM app_merek merek
                            LEFT JOIN app_model model ON model.id_merek = merek.id
                            LEFT JOIN app_tipe tipe ON tipe.id_model = model.id
                            WHERE model.id = " . $data->id_model;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["nama_model"];
                    return $result;
                },
            ],
            'cc',
            'seats',
            [
                'attribute' => 'transmission',
                'header' => 'Transmission',
                'filter' => ['0' => 'Manual', '1' => 'Automatic', '2' => 'CVT'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->transmission == '0') {
                        return '<span class="' . $model->transmission . '" style=""> Manual </span>';
                    } else if($model->transmission == '1') {
                        return '<span class="' . $model->transmission . '" style=""> Automatic </span>';
                    }else{
                        return '<span class="' . $model->transmission . '" style=""> CVT </span>';    
                    }
                },
            ],
            'doors',
            'engine_cylinder',
            [
                'attribute' => 'wheels',
                'header' => 'Wheels',
                'filter' => ['1' => '4WD', '0' => '2WD'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->wheels == '1') {
                        return '<span class="' . $model->wheels . '" style=""> 4WD </span>';
                    } else {
                        return '<span class="' . $model->wheels . '" style=""> 2WD </span>';
                    }
                },
            ],
            [
                'attribute' => 'power_steering',
                'header' => 'Power Steering',
                'filter' => ['Yes' => 'Yes', 'No' => 'No'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->power_steering == 'Yes') {
                        return '<span class="' . $model->power_steering . '" style=""> Yes </span>';
                    } else {
                        return '<span class="' . $model->power_steering . '" style=""> No </span>';
                    }
                },
            ],
            'img_1:ntext',
            [
                'attribute' => 'status',
                'header' => 'status',
                'filter' => ['aktif' => 'Aktif', 'reject' => 'Reject', 'request' => 'Request'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->status == 'aktif') {
                        return '<span class="' . $model->status . '" style=""> Aktif </span>';
                    } else if($model->status == 'reject') {
                        return '<span class="' . $model->status . '" style=""> Reject </span>';
                    }else if($model->status == 'request') {
                        return '<span class="' . $model->status . '" style=""> Request </span>';
                    }
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
