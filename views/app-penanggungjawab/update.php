<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppPenanggungjawab */

$this->title = 'Update App Penanggungjawab: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App Penanggungjawabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-penanggungjawab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
