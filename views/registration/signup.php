<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Sign up';
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
            <div class="signup_wrapper"
        <h4>Please fill out the following fields to sign up:</h4>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'class' => 'signup_form'
    ]); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                
                <?= $form->field($model, 'email')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        
                <?= Html::submitButton('Sign up', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            

    <?php ActiveForm::end(); ?>
                <div class="signup_form">
				<h4>Please fill out the following fields to sign up:</h4>
				<div class="group" id="name">
					<input type="text" required="required">				
					 <span class="highlight"></span><span class="bar"></span>
					 <label>Name</label>  
				</div>

				<div class="group" id="email">
					<input type="email" required="required">
                    <span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
				</div>

				<div class="group" id="password">
					<input type="text" required="required">
                      <span class="highlight"></span><span class="bar"></span>
                      <label>Password</label>
				</div>
				<button type="submit" class="button_signup_form button_signup_form-swap_signup_form">Sign up<span>Sign up</span></button>
			</div>
</div>
            </section>



