<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Albums */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="albums-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_main')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_07')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_08')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_09')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_21')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
