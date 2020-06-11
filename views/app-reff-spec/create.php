<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppReffSpec */

$this->title = 'Create App Reff Spec';
$this->params['breadcrumbs'][] = ['label' => 'App Reff Specs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-reff-spec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
