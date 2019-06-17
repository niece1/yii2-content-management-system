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

    <?= Html::a('Set image 01', ['set-image01', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 02', ['set-image02', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 03', ['set-image03', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 04', ['set-image04', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 05', ['set-image05', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 06', ['set-image06', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 07', ['set-image07', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 08', ['set-image08', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 09', ['set-image09', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 10', ['set-image10', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 11', ['set-image11', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 12', ['set-image12', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 13', ['set-image13', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 14', ['set-image14', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 15', ['set-image15', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 16', ['set-image16', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 17', ['set-image17', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 18', ['set-image18', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 19', ['set-image19', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 20', ['set-image20', 'id' => $model->id]) ?><br>

    <?= Html::a('Set image 21', ['set-image21', 'id' => $model->id]) ?><br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
