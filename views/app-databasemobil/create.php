<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppDatabasemobil */

$this->title = 'Create App Databasemobil';
$this->params['breadcrumbs'][] = ['label' => 'App Databasemobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-databasemobil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listUser' => $listUser,
        'listShowroom'=> $listShowroom,
        'listCity' => $listCity,
        'listMerek' => $listMerek,
        'listModel1' => $listModel1,
        'listTipe' => $listTipe,
        'listWarna' => $listWarna,
    ]) ?>

</div>
