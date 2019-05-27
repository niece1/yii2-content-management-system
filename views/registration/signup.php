<?php

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Sign up';
?>

<!--Header-->
	<section class="header" data-type="background" style="background-image: url(/markup/img/IMG_8562.jpg);">
		<div class="menu_page">
			<a href="<?= Url::to(['site/index']);?>">gael</a>			
			
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
                 <?= Html::tag('h4', 'Please fill out the following fields to sign up:') ?>
            
    <?php $form = ActiveForm::begin([
     
       'options' => ['class' => 'signup_form'],
     
  
    ]); ?>

        <?= $form->field($model, 'name', [
            'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'name','class'=>'group', ]])->textInput(['required' => 'required', 'autofocus' => true]) ?>
                
                <?= $form->field($model, 'email', [
                    'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'email','class'=>'group']])->textInput(['required' => 'required']) ?>

        <?= $form->field($model, 'password', [
             'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
           
'options'=>['id'=>'password','class'=>'group']])->passwordInput(['required' => 'required']) ?>

        
                <?= Html::submitButton('Sign up<span>Sign up</span>', ['class' => 'button_signup_form button_signup_form-swap_signup_form']) ?>
            

    <?php ActiveForm::end(); ?>
            
           
                
      <!--          <form class="signup_form">
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
                                    <input type="password" required="required">
                      <span class="highlight"></span><span class="bar"></span>
                      <label>Password</label>
				</div>
				<button type="submit" class="button_signup_form button_signup_form-swap_signup_form">Sign up<span>Sign up</span></button>
			</form> -->
</div>
            </section>



