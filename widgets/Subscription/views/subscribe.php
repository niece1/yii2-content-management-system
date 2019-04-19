<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    if (Yii::$app->session->hasFlash('subscribeStatus')) {
  echo Yii::$app->session->getFlash('subscribeStatus');
  }
if ($model->hasErrors()) {
     
    return $model->getErrors();

}

?>

<form method="post" class="input-wrapper" data-text="">
					<input id="newsletter" type="email" placeholder="Your email">
					<button type="submit" class="button_footer button_footer-swap_footer">Send<span>Send</span></button> 
				</form>
