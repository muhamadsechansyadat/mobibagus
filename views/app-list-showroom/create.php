<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppListShowroom */

$this->title = 'Create App List Showroom';
$this->params['breadcrumbs'][] = ['label' => 'App List Showrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-list-showroom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listProvinsi' => $listProvinsi,
        'listCity1' => $listCity1,
        'listLeasing' => $listLeasing,
    ]) ?>

</div>
