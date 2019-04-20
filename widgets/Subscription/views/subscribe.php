

  <?php  if (Yii::$app->session->hasFlash('subscribeStatus')) {?><p class="error_newsletter">
  <?php echo Yii::$app->session->getFlash('subscribeStatus');?></p><?php
  } ?>
  <?php
if ($model->hasErrors()) {
     
    return $model->getErrors();

}

?>

<form method="post" class="input-wrapper" data-text="">
					<input id="newsletter" name="email" type="email" placeholder="Your email">
					<button type="submit" class="button_footer button_footer-swap_footer">Send<span>Send</span></button> 
				</form>
