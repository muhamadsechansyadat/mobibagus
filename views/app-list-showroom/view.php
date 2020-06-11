<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AppListShowroom */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App List Showrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-list-showroom-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'provinci_id',
            'city_id',
            'leasing_id',
            'showroom_name',
            'logo',
            'phone_1',
            'phone_2',
            'status',
            'latitude',
            'langitude',
            'created_at',
        ],
    ]) ?>

</div>
