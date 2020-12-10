<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>House3D - E-Catalogue Solutions</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/png">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import the component 3dmodel viewer-->
    <!-- <script type="module" src="../assets/js/model-viewer.min.js"></script>
    <script nomodule src="../assets/js/model-viewer-legacy.js"></script> -->


    <!-- Import the component -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

    <style>
        *{
            margin:0;
            padding:0;
        }
        html{
            height: 100%;
            width: 100%;
        }
        body {
            height: 100%;
            width: 100%;
        }
        model-viewer{
            height:100%;
            width:100%;
        }


    </style>
    
</head>

<body>

    <img src="http://localhost/yii2/backend/web/uploads/thumbnails/poster.png">

    <model-viewer id="model_viewer" ar ar-scale="auto" camera-controls src="http://localhost/yii2/backend/web/uploads/models/cube.glb" 
                  poster="http://localhost/yii2/backend/web/uploads/thumbnails/poster.png" camera-orbit="-60deg 60deg 10m" field-of-view="45deg" exposure="1.5" shadow-intensity="1.5" shadow-softness="1">

    </model-viewer>

    <!-- <model-viewer src="http://localhost/yii2/backend/web/uploads/models/cube.glb" alt="A 3D model of an astronaut" auto-rotate camera-controls></model-viewer> -->


</body>

</html>
