<?php
/* @var $model app\models\SearchForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin([
     'options' => ['class' => 'input-search', 'data-text' => ""],
     'action' => Yii::$app->urlManager->createUrl(['site/search']),
     'fieldConfig' => ['template' => "{error}{input}"] ]); ?>
   <?= $form->field($model, 'keyword')->textInput(['placeholder' => 'Search...', 'id' => 'search']) ?>
<?= Html::submitButton('<i class="fas fa-search"></i><span><i class="fas fa-search"></i></span>', ['class' => 'button_sidebar button_sidebar-swap_sidebar']) ?>    
     <?php ActiveForm::end(); ?>
