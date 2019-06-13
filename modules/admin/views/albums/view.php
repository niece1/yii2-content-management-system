<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Albums */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="albums-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'image_main',
            'image_01',
            'image_02',
            'image_03',
            'image_04',
            'image_05',
            'image_06',
            'image_07',
            'image_08',
            'image_09',
            'image_10',
            'image_11',
            'image_12',
            'image_13',
            'image_14',
            'image_15',
            'image_16',
            'image_17',
            'image_18',
            'image_19',
            'image_20',
            'image_21',
        ],
    ]) ?>

</div>
