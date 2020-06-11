<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppSpec */

$this->title = 'Create App Spec';
$this->params['breadcrumbs'][] = ['label' => 'App Specs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-spec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listModel' => $listModel,
        'listTipe' => $listTipe,
    ]) ?>

</div>
