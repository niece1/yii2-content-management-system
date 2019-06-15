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

    <?= Html::a('Set main image', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 01', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 02', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 03', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 04', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 05', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 06', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 07', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 08', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 09', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 10', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 11', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 12', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 13', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 14', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 15', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 16', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 17', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 18', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 19', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 20', ['set-image', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 21', ['set-image', 'id' => $model->id]) ?><br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
