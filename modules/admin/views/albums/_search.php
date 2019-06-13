<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlbumsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="albums-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'image_main') ?>

    <?= $form->field($model, 'image_01') ?>

    <?= $form->field($model, 'image_02') ?>

    <?php // echo $form->field($model, 'image_03') ?>

    <?php // echo $form->field($model, 'image_04') ?>

    <?php // echo $form->field($model, 'image_05') ?>

    <?php // echo $form->field($model, 'image_06') ?>

    <?php // echo $form->field($model, 'image_07') ?>

    <?php // echo $form->field($model, 'image_08') ?>

    <?php // echo $form->field($model, 'image_09') ?>

    <?php // echo $form->field($model, 'image_10') ?>

    <?php // echo $form->field($model, 'image_11') ?>

    <?php // echo $form->field($model, 'image_12') ?>

    <?php // echo $form->field($model, 'image_13') ?>

    <?php // echo $form->field($model, 'image_14') ?>

    <?php // echo $form->field($model, 'image_15') ?>

    <?php // echo $form->field($model, 'image_16') ?>

    <?php // echo $form->field($model, 'image_17') ?>

    <?php // echo $form->field($model, 'image_18') ?>

    <?php // echo $form->field($model, 'image_19') ?>

    <?php // echo $form->field($model, 'image_20') ?>

    <?php // echo $form->field($model, 'image_21') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
