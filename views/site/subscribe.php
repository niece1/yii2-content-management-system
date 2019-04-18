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

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <button type="submit">Send</button>
</form>
