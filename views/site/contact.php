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
    <h1><?= Html::encode($this->title) ?></h1>

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

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
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
				<h4>Don’t be shy…</h4>
				<p>We’re friendly! whether you’d like us to work on a project for you or not. If you do decide to send us a message, we’ll do our very best to get back to you within 24 hours.</p>
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

				<div class="group" id="message">
					<input type="text" required="required">
                      <span class="highlight"></span><span class="bar"></span>
                      <label>Message</label>
				</div>
				<button type="submit" class="button_contact_form button_contact_form-swap_contact_form">Send<span>Send</span></button>
			</div>
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
