<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppMerek */

$this->title = 'Create App Merek';
$this->params['breadcrumbs'][] = ['label' => 'App Mereks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-merek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
