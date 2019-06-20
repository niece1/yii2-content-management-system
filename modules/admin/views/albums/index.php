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
    <div class="grid_wrapper">
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
            [
                'format' => 'html',
                'label' => 'Image 04',
                'value' => function($data){
                    return Html::img($data->getImage04(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 05',
                'value' => function($data){
                    return Html::img($data->getImage05(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 06',
                'value' => function($data){
                    return Html::img($data->getImage06(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 07',
                'value' => function($data){
                    return Html::img($data->getImage07(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 08',
                'value' => function($data){
                    return Html::img($data->getImage08(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 09',
                'value' => function($data){
                    return Html::img($data->getImage09(), ['width'=>200]);
                }
            ],[
                'format' => 'html',
                'label' => 'Image 10',
                'value' => function($data){
                    return Html::img($data->getImage10(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 11',
                'value' => function($data){
                    return Html::img($data->getImage11(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 12',
                'value' => function($data){
                    return Html::img($data->getImage12(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 13',
                'value' => function($data){
                    return Html::img($data->getImage13(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 14',
                'value' => function($data){
                    return Html::img($data->getImage14(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 15',
                'value' => function($data){
                    return Html::img($data->getImage15(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 16',
                'value' => function($data){
                    return Html::img($data->getImage16(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 17',
                'value' => function($data){
                    return Html::img($data->getImage17(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 18',
                'value' => function($data){
                    return Html::img($data->getImage18(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 19',
                'value' => function($data){
                    return Html::img($data->getImage19(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 20',
                'value' => function($data){
                    return Html::img($data->getImage20(), ['width'=>200]);
                }
            ],
            [
                'format' => 'html',
                'label' => 'Image 21',
                'value' => function($data){
                    return Html::img($data->getImage21(), ['width'=>200]);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    </div>
</div>
