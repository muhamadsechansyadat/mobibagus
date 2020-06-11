<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppTipe */

$this->title = 'Create App Tipe';
$this->params['breadcrumbs'][] = ['label' => 'App Tipes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-tipe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listMerek' => $listMerek,
        'listModel1' => $listModel1,
    ]) ?>

</div>
