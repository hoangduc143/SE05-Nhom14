<?php
    use yii\helpers\Html;
    
    // <!--====== Title ======-->
    $this->title = 'House3D - E-Catalogue Solutions';
?>

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="<?php //echo Yii::getAlias('@web').'/'.$model->thumbnail?>" type="image/png"> -->
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import the component -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

    <?= Html::style('#model_viewer { height:440px; width:1150px; }') ?>

    <img src="<?php //echo Yii::getAlias('@web').'/'.$model->thumbnail?>">

    <model-viewer id="model_viewer" ar ar-scale="auto" camera-controls src="<?=Yii::getAlias('@web').'/'.$model->model?>" camera-orbit="-60deg 60deg 10m" field-of-view="45deg" exposure="1.5" shadow-intensity="1.5" shadow-softness="1">

    </model-viewer>
