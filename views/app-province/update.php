<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppProvince */

$this->title = 'Update App Province: ' . $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'App Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_id, 'url' => ['view', 'id' => $model->province_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-province-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
