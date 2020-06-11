<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<center>

<div class="container" style="background: #DDDAD4; width: 40rem; min-height: 40rem; box-shadow: 5px 5px 5px 5px #888888; border-radius: 5px;">
<div class="card" style="width: 30rem; padding-top: 5%; padding-bottom: 5%;">
    
       <div class="card-header">
          <h2><span class="glyphicon glyphicon-briefcase text-warning"></span></h2>
           <h2 class="card-title">RAMO-<span class="text-warning">ADMIN</span></h2><br>
       </div>
       <div class="card-body">
           
           <?php $form = ActiveForm::begin(['id'=>'login-form']); ?>
           <?= $form->field($model, 'username',['options'=>[
            'tag'=>'div',
            'class'=>'form-group  field-loginform-username has-feedback required'
            ],
            'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
                        {error}{hint}'
            ])->textInput(['placeholder'=>'Username']) ?>

            <?= $form->field($model, 'password',['options'=>[
              'tag'=>'div',
            'class'=>'form-group  field-loginform-username has-feedback required'
            ],
              'template'=>'{input}<span class="glyphicon glyphicon-wrench form-control-feedback"></span>
                        {error}{hint}'
          ])->passwordInput(['placeholder'=>'Password']) ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('login',['class' => 'btn btn-warning btn-block', 'name'=> 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
       </div>
  
</div>
</div>

</center>