<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppProvinceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Provinces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-province-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Province', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'province_id',
            'province_name',
            'province_code',
            'area_tab',
            'counter',
            [
                'attribute' => 'status',
                'header' => 'Status',
                'filter' => ['1' => 'Show', '0' => 'Not Show', '2' => 'Deleted'], 
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->status == '1') {
                        return '<span class="' . $model->status . '" style="color:green">Show</span>';
                    } elseif ($model->status == '0') {
                        return '<span class="' . $model->status . '" style="color:red"> Not Show </span>';
                    } else {
                        return '<span class="' . $model->status . '" style="color:blue"> Deleted </span>';
                    }
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
