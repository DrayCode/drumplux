<?php $pagina="empezar"; include("requeridos/session.php");error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <title>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://webrtc.tools/media/css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    <?php include("requeridos/head.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://webrtc.tools/chat/js/adapter.js"></script>
 

   
    <link href="https://webrtc.tools/media/css/videoConfiguration.css" rel="stylesheet" />
 
</head>
 
 

<?php include('requeridos/cabecera.php');?>
<br>
<br>
<br>
<br>
<br>
<body  >
<script>
    const queryString = window.location.search;
    function saveCon() {
        saveConfiguration(1,"reunion"+queryString);
    }
    
</script>

<?php

include('requeridos/conexion.php');
$idsala =$_GET['ChatGuid'];
$usuariodelasala= $_GET['UserGuid'];
$idnombre = $id;
$queryto = mysqli_query($conexion," SELECT * FROM llamadapriv WHERE  idsala = '$idsala' AND  idnombre = '$idnombre'");
$result = mysqli_fetch_array($queryto);
$querytoc = mysqli_query($conexion," SELECT * FROM llamadapriv WHERE  idsala = '$idsala'");
$cantidad = mysqli_num_rows($querytoc);
 
if($cantidad == 2 && $result == 0 ) {
    echo "<script>alert('Usted No está invitado a esta llamada')</script>";
    echo '<script>window.location.href = "./"</script>';
}else{
    
}
if ($result > 0 && $cantidad == 2) {

    echo "<script>window.onload = function traerelindex() {
     
        saveCon();
     }</script>";
   
}elseif ($result > 0) {
    echo "<script>window.onload = function traerelindex() {
     
        saveCon();
     }</script>";
}elseif ($cantidad==2) {
    echo "";
}else{

       $sql = mysqli_query($conexion,"INSERT INTO `llamadapriv` (`id`, `idsala`, `idnombre`, `usuariodelasala`) VALUES (NULL, '$idsala','$idnombre','$usuariodelasala')");

}
 
?>

    <form method="post" action="empezando" id="form1">

        <center>

                        <style>
                           .companyProfile{
                               display:block !important;
                               width:700px !important;
                               max-width:100%;
                           }
                           .companyName{
                            max-width:100%;
                           }
                           #videoConfiguraionButton{
                               max-width:100%;
                           }
                           #localVideo{
                               max-width:100%;
                           }
                        </style>
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
                        <link href="https://webrtc.tools/media/css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
                        <div class="companyProfile">
                            <div class="companyBody">
                                <div class="form">
                                    <div class="rowForm companyName">
                                        <div id="videoConfiguraionButton" class="bigButton" onclick="saveCon()">Dale Click Aquí para entrar a la sala </div>
                                        <div id="configurationFaild" class="bigButton"  onclick="saveCon()" style="cursor:pointer;">Dispositivos Bloqueados "Continuar"</div>
                                        <div class="bigButton" onclick="openCamera()" id="openCameraButton" style="display: none">Haga clic aquí para probar su micrófono y cámara</div>
                                        <div class="clear">
                                        </div>
                                    </div>
                                    <div class="rowForm mainDiv2">
                                        <div id="mediaChoose">
                                            
                                            <div class="mediaChooseDiv">
                                                <label>
                                                    Camara
                                                </label>
                                                <select id="videoDevice" class="selectMedia">
                                                </select>
                                            </div>
                                            <div class="mediaChooseDiv">
                                                <label>
                                                    Microfono
                                                </label>
                                                <select id="audioDevice" class="selectMedia">
                                                </select>
                                            </div>
                                            <div class="mediaChooseDiv">
                                                <label>
                                                    Altavoces
                                                </label>
                                                <select id="audioOutput" class="selectMedia">
                                                </select>
                                            </div>

                                        </div>
                                        <div class="videoDiv">
                                           
                                            <video style="width: 600px;height: auto;" poster="<?php echo $foto;?>" id="localVideo" autoplay playsinline muted></video>
                                        </div>
                                        <div id="mediaData">
                                        </div>

                                    </div>

                                </div>
                            </div>
                             
                            <div style="display: none">
                                <div>
                                    <label id="btnGetAudioTracks">
                                        getAudioTracks()
                                    </label>
                                </div>
                                <div>
                                    <label id="btnGetTrackById">
                                        getTrackById()
                                    </label>
                                </div>
                                <div>
                                    <label id="btnGetTracks">getTracks()</label>
                                </div>
                                <div>
                                    <label id="btnGetVideoTracks">
                                        getVideoTracks()
                                    </label>
                                </div>
                                <div>
                                    <label id="btnRemoveAudioTrack">
                                        removeTrack() - audio
                                    </label>
                                </div>
                                <div>
                                    <label id="btnRemoveVideoTrack">
                                        removeTrack() - video
                                    </label>
                                </div>
                                <script src="https://webrtc.tools/media/webrtc/events.js"></script>
                            </div>




                            <!--<script src="https://webrtc.tools/media/webrtc/soundmeter.js"></script>-->
                            <script src="https://webrtc.tools/media/webrtc/main.js"></script>


                        </div>
                        <script>
                            


                            $(document).ready(function () {
                                navigator.mediaDevices.enumerateDevices()
                                    .then(gotDevices).then(getStream).catch(handleError);
                                audioDevice.onchange = getStream;
                                videoDevice.onchange = getStream;
                            });

                            document.cookie = "videoSource=0";
                            document.cookie = "audioSource=0";
                            document.cookie = "audioOutput=0";
                            
                        </script>
              

           
        </center>
    </form>
    <div class="espaciocoleto"></div>
               <script src="js/vidconfig.js?adasfgdsgsd=12"></script>
  
</body>
</html>
