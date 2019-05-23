<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<div class="site-contact">
   


</div>

<!--Header-->
	<section class="header" data-type="background" style="background-image: url(/markup/img/IMG_7010.jpg);">
		<div class="menu_page">
			<a href="index.html">gael</a>			
			
			<div id="trigger-overlay" class="hamburger_wrapper">
				<div class="hamburger_menu"></div>	  
			</div>	  
		</div>
		<div class="parallax_text">
			<h3>Contact</h3>
		</div>
	</section><!-- /.Header -->

	<!--Contact section-->
	<section class="contact">
		<div class="contact_wrapper">
			<div class="contact_form">
                            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

      
				<h4>Don’t be shy…</h4>
				<p>We’re friendly! whether you’d like us to work on a project for you or not. If you do decide to send us a message, we’ll do our very best to get back to you within 24 hours.</p>
				
                                <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'name', [
                    'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'name','class'=>'group']])->textInput(['required' => 'required', 'autofocus' => true]) ?>

                    <?= $form->field($model, 'email', [
                    'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'email','class'=>'group']])->textInput(['required' => 'required']) ?>

                

                    <?= $form->field($model, 'message', [
                    'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'message','class'=>'group']])->textinput(['required' => 'required']) ?>

                   <?= $form->field($model, 'verifyCode', ['template'=>"{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}", 'options'=>['id'=>'cap_cha','class'=>'group']])->widget(Captcha::className(), [
                        'template' =>'{image}{input}',
                        'options'=>['required' => 'required'],
                        'imageOptions'=>['style'=>'float: right;']
                    ]) ?>
<div class="form-group">
                    <?= Html::submitButton('Submit<span>Submit</span>', ['class' => 'button_contact_form button_contact_form-swap_contact_form']) ?>
</div>
                <?php ActiveForm::end(); ?>
			</div>
                    <?php endif; ?>
			<div class="direct_contact">
				<h4>General inquiries</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo atque at soluta eaque deserunt, tempore, vero labore eos ea necessitatibus.</p>
				<h6>Telephone</h6>
				<p><i class="fab fa-viber"></i>+380 63 257 1046</p>
				<h6>Email</h6>
				<p><i class="far fa-envelope"></i>gael@gmail.com</p>
				<h6>Skype</h6>
				<p><i class="fab fa-skype"></i>vladimir.zhonchuk</p>
			</div>
		</div>
	</section>
