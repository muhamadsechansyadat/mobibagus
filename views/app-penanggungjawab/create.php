<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppPenanggungjawab */

$this->title = 'Create App Penanggungjawab';
$this->params['breadcrumbs'][] = ['label' => 'App Penanggungjawabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-penanggungjawab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'appPetugass' => $appPetugass,
    ]) ?>

</div>
