<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
            array('label' => 'Mobil',
                'url' => '#',
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                'itemOptions' => array('class' => 'dropdown'),
                'submenuOptions' => array('class' => 'dropdown-menu'),
                'items' => array(
                    array('label' => 'Merk',
                        'url' => array('/app-merek/index')),
                    array('label' => 'Model',
                    'url' => array('/app-model/index')),
                    array('label' => 'Tipe',
                        'url' => array('/app-tipe/index')),
                    array('label' => 'Type Spec',
                        'url' => array('/app-spec/index')),
                    array('label' => 'Reff Spec',
                        'url' => array('/app-reff-spec/index')),
                     array('label' => 'Warna',
                        'url' => array('/app-warna/index')),

                )),
            array('label' => 'User',
                'url' => '#',
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                'itemOptions' => array('class' => 'dropdown'),
                'submenuOptions' => array('class' => 'dropdown-menu'),
                'items' => array(
                    array('label' => 'Users',
                        'url' => array('/app-users/index')),
                )),
            array('label' => 'Database',
                'url' => '#',
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                'itemOptions' => array('class' => 'dropdown'),
                'submenuOptions' => array('class' => 'dropdown-menu'),
                'items' => array(
                    array('label' => 'Database Mobil',
                        'url' => array('/app-databasemobil/index')),
                    array('label' => 'City',
                        'url' => array('/app-city/index')),
                    array('label' => 'Province',
                        'url' => array('/app-province/index')),
                    array('label' => 'List Leasing',
                        'url' => array('/app-list-leasing/index')),
                    array('label' => 'List Showroom',
                        'url' => array('/app-list-showroom/index')),
                    array('label' => 'Petugas',
                        'url' => array('/app-petugas/index')),
                    array('label' => 'Penanggung Jawab',
                        'url' => array('/app-penanggungjawab/index')),

                )),
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">Copyright &copy; <?= date('Y') ?> PT. RajaMobil Media (Rajamobil.com), All Right
            Reserved.</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
