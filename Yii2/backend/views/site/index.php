<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'My Yii Application';

// $this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['/product/index']];
// $this->params['breadcrumbs'][] = $this->title;

?>

<p>
    <?= Html::a('Product', ['/product/index'], ['class' => 'btn btn-success']) ?>
</p>

<p>
    <?= Html::a('Model3d', ['/product/model', 'id' => 24], ['class' => 'btn btn-success']) ?>
</p>

<!-- <div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

</div> -->
