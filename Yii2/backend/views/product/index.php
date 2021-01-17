<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'header' => 'STT'
            ],

            'id',
            'productname',
            'description',
            // 'thumbnail',
            // 'model',
            // 'snipet',
            // 'environment',
            // 'embedcode',
            [
                'attribute' => 'created_at',
                'content' => function($model) {
                    return date('Y-m-d h:m:s', $model->created_at);
                }
            ],
            
            [
                'attribute' => 'created_by',
                'content' => function($model) {
                    return $model->created_by;
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                
                'buttons' => [
                    'model' => function ($url, $model, $key) {
                        return Html::a('View3D', $url, ['class' => 'btn btn-success']);
                    },
                ]
            ],
        ],
    ]); ?>


</div>
