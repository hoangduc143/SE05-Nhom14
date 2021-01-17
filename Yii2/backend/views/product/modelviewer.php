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
    <!-- <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script> -->

    <script type="module" src="model-viewer.min.js"></script>
    <script nomodule src="model-viewer-legacy.js"></script>

    <?= Html::style('model-viewer { height:440px; width:1150px; }') ?>

    <?php
        $filename = $model->snipet;
        $text = file_get_contents($filename);
        $snippet = preg_replace("/src=\"*\"/", 'src="'.Yii::getAlias('@web').'/'.$model->model.'"', $text);
        $snippet = preg_replace("/>/", 'environment-image="'.Yii::getAlias('@web').'/'.$model->environment.'">', $snippet);
        echo $snippet;
    ?>