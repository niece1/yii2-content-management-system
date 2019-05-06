<?php


/* @var $model app\models\Subscribe */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

?>
<!--<form method="post" class="input-wrapper" data-text="">
					<input id="newsletter" name="email" type="email" placeholder="Your email">
					<button type="submit" class="button_footer button_footer-swap_footer">Send<span>Send</span></button> 
				</form>-->
 <?php Pjax::begin(['timeout' => 5000]); ?>
 <?php $form = ActiveForm::begin([
     'options' => ['class' => 'input-wrapper', 'data-pjax' => true, 'data-text' => ""],
     'fieldConfig' => ['template' => "{error}{input}"] ]); ?>
<?php  if (Yii::$app->session->hasFlash('subscribeStatus')) {?><p class="error_newsletter">
  <?php echo Yii::$app->session->getFlash('subscribeStatus');?></p><?php
  } ?>
   <?= $form->field($model, 'email')->textInput(['placeholder' => 'Your email', 'id' => 'newsletter']) ?>

<?= Html::submitButton('Send<span>Send</span>', ['class' => 'button_footer button_footer-swap_footer']) ?>
    
     
     
     <?php ActiveForm::end(); ?>
 <?php Pjax::end(); ?>