<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AppModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-model-view">

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
            'description_baru:ntext',
            'description_bekas:ntext',
            'review:ntext',
            'id_merek',
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
        ],
    ]) ?>

</div>
