<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AppTipe */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Tipes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-tipe-view">

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
            'datecreated',
            'name',
            'description',
            'id_merek',
            'id_model',
            'cc',
            'seats',
            'transmission',
            'doors',
            'engine_cylinder',
            'wheels',
            'power_steering',
            'img_1:ntext',
            'status',
        ],
    ]) ?>

</div>
