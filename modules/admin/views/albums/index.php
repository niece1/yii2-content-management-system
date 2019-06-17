<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlbumsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Albums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="albums-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Albums', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'format' => 'html',
                'label' => 'Main Image',
                'value' => function($data){
                    return Html::img($data->getImage(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 01',
                'value' => function($data){
                    return Html::img($data->getImage01(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 02',
                'value' => function($data){
                    return Html::img($data->getImage02(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 03',
                'value' => function($data){
                    return Html::img($data->getImage03(), ['width'=>200]);
                }
            ],
            'image_04',
            'image_05',
            'image_06',
            'image_07',
            'image_08',
            'image_09',
            'image_10',
            'image_11',
            //'image_12',
            //'image_13',
            //'image_14',
            //'image_15',
            //'image_16',
            //'image_17',
            //'image_18',
            //'image_19',
            //'image_20',
            //'image_21',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
