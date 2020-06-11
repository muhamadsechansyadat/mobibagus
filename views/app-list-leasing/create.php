<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppListLeasing */

$this->title = 'Create App List Leasing';
$this->params['breadcrumbs'][] = ['label' => 'App List Leasings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-list-leasing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
