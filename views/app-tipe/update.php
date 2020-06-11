<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppTipe */

$this->title = 'Update App Tipe: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Tipes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-tipe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listMerek' => $listMerek,
        'listModel1' => $listModel1,
    ]) ?>

</div>
