<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppCitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App City', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'city_id',
            'province_id',
            'city_name',
            'area_tab',
            'counter',
            'use_promo',
            'popular',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
