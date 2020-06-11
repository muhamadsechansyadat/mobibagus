<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppMerekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Mereks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-merek-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Merek', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'datecreated',
            'name',
            'slug',
            'description',
            'description_history:html',
            'img_1:ntext',
            'img_car_sample:ntext',
            'counter',
            'logo:ntext',
            'popular',
            'seo_desc_baru:html',
            'seo_desc_bekas:html',
            [
                'attribute' => 'status',
                'header' => 'Status',
                'filter' => ['0' => 'Show', '1' => 'Not Show', '2' => 'Deleted'],
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->status == '0') {
                        return '<span class="' . $model->status . '" style="color:green">Show</span>';
                    }elseif ($model->status == '1') {
                        return '<span class="' . $model->status . '" style="color:black">Not Show</span>';
                    }else {
                        return '<span class="' . $model->status . '" style="color:red"> Deleted </span>';
                    }
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
