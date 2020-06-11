<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppWarna */

$this->title = 'Create App Warna';
$this->params['breadcrumbs'][] = ['label' => 'App Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-warna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
