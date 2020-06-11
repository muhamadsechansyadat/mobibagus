<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppListShowroom */

$this->title = 'Update App List Showroom: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App List Showrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-list-showroom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listProvinsi' => $listProvinsi,
        'listCity1' => $listCity1,
        'listLeasing' => $listLeasing,
    ]) ?>

</div>
