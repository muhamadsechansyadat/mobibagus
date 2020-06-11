<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppCity */

$this->title = 'Update App City: ' . $model->city_id;
$this->params['breadcrumbs'][] = ['label' => 'App Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->city_id, 'url' => ['view', 'id' => $model->city_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-city-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
