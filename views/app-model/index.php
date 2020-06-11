<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'datecreated',
            'name',
            'description_baru:ntext',
            'description_bekas:ntext',
            'review:ntext',
            [
                'attribute' => 'id',
                'header' => 'ID Merek',
                'filter' => $listIdmerek,
                'value' => function ($data) {
                    $sql = "SELECT merek.id, merek.name
                            FROM app_merek merek
                            WHERE merek.id=" . $data->id;
                    $result = Yii::$app->db->createCommand($sql)->queryOne()["name"];
                    return $result;
                },
            ],
            'id_body',
            'img_1:ntext',
            'img_1260:ntext',
            'img_600:ntext',
            'popular',
            'ispremium',
            'seo_h1',
            'seo_title',
            'seo_description',
            'seo_keyword',
            'fuel_system',
            'body_type',
            'fuel_type',
            'seating_person',
            'allow_promo',
            [
                'attribute' => 'status',
                'header' => 'Status',
                'filter' => ['1' => 'Not Show', '0' => 'Show', '2' => 'Deleted'], 
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->status == '1') {
                        return '<span class="' . $model->status . '" style="color:red">Not Show</span>';
                    } elseif ($model->status == '0') {
                        return '<span class="' . $model->status . '" style="color:green"> Show </span>';
                    } else {
                        return '<span class="' . $model->status . '" style="color:blue"> Deleted </span>';
                    }
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
