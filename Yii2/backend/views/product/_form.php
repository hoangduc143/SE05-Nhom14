<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thumbnail_image')->fileInput() ?>

    <?= $form->field($model, 'glbFile')->fileInput() ?>

    <?= $form->field($model, 'snipet')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'environment')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'hdrFile')->fileInput() ?>

    <?= $form->field($model, 'embedcode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
