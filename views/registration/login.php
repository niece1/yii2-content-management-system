<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
?>

<!--Header-->
	<section class="header" data-type="background" style="background-image: url(/markup/img/IMG_8562.jpg);">
		<div class="menu_page">
			<a href="index.html">gael</a>			
			
			<div id="trigger-overlay" class="hamburger_wrapper">
				<div class="hamburger_menu"></div>	  
			</div>	  
		</div>
		<div class="parallax_text">
			<h3><?= Html::encode($this->title) ?></h3>
		</div>
	</section><!-- /.Header -->
        

        <section class="signup">
            <div class="signup_wrapper">
                 <?= Html::tag('h4', 'Please fill out the following fields to login:') ?>
            
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
       'options' => ['class' => 'signup_form'],
     
  
    ]); ?>

       
                
                <?= $form->field($model, 'email', [
                    'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'email','class'=>'group']])->textInput(['required' => 'required', 'autofocus' => true]) ?>

        <?= $form->field($model, 'password', [
             'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
           
'options'=>['id'=>'password','class'=>'group']])->passwordInput(['required' => 'required']) ?>

               <?= $form->field($model, 'rememberMe', ['options'=>['class'=>'group']])->checkbox() ?>
        
                <?= Html::submitButton('Login<span>Login</span>', ['class' => 'button_signup_form button_signup_form-swap_signup_form', 'name' => 'login-button']) ?>
            

    <?php ActiveForm::end(); ?>
            
</div>
            </section>