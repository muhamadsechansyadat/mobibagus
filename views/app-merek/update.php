<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppMerek */

$this->title = 'Update App Merek: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Mereks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-merek-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
