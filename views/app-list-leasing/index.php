<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppListLeasingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App List Leasings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-list-leasing-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App List Leasing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'leasing_name',
            'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
