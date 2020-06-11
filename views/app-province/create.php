<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppProvince */

$this->title = 'Create App Province';
$this->params['breadcrumbs'][] = ['label' => 'App Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-province-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
