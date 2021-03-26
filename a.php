<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor de video</title>
</head>

<body> 
     <video id=usastreams-video
        keyLicencia="2854361USAstreams.COM" crossorigin="anonymous" class="video-js vjs-fluid vjs-default-skin"  
        controls  >
        <source src="videos/2020-11-23 14-36-44.mp4" type="video/mp4"></video>
    <link href="css/video.css" rel="stylesheet">
    <script type="text/javascript" src="js/video.js"></script>
    <script type="text/javascript" src="js/videojs.js"></script>
    <script type="text/javascript" src="js/contadorv.js"></script>
    <script>
        (function (window, videojs) {
            var player = window.player = videojs('usastreams-video');
            return false;
        }(window, window.videojs));
    </script> 


</body>
<div class="emojis">
    <i class="icon-happy"></i>
    <i class="icon-smile"></i>
    <i class="icon-tongue"></i>
    <i class="icon-sad"></i>
    <i class="icon-wink"></i>
    <i class="icon-grin"></i>
    <i class="icon-cool"></i>
    <i class="icon-angry"></i>
    <i class="icon-evil"></i>
    <i class="icon-shocked"></i>
    <i class="icon-baffled"></i>
    <i class="icon-confused"></i>
    <i class="icon-neutral"></i>
    <i class="icon-hipster"></i>
    <i class="icon-wondering"></i>
    <i class="icon-sleepy"></i>
    <i class="icon-frustrated"></i>
    <i class="icon-crying"></i>
</div>

</html>