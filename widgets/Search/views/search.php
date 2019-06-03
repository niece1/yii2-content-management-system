<?php
/* @var $model app\models\Subscribe */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin([
     'options' => ['class' => 'input-wrapper', 'data-text' => ""],
     'fieldConfig' => ['template' => "{error}{input}"] ]); ?>
   <?= $form->field($model, 'email')->textInput(['placeholder' => 'Your email', 'id' => 'newsletter']) ?>
<?= Html::submitButton('<i class="fas fa-search"></i><span><i class="fas fa-search"></i></span>', ['class' => 'button_footer button_footer-swap_footer']) ?>    
     <?php ActiveForm::end(); ?>
