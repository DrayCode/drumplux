<?php $pagina="empezar"; include("requeridos/session.php");error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
    <title>Drum Plux - En llamada!</title>
    <link href="https://webrtc.tools/media/css/video.css" rel="stylesheet" />
    <script src="https://webrtc.tools/nodeJS?fn=jquery.min,adapter,signalr"></script>
    <?php 
    
    include("requeridos/head.php");
    $idsala =$_GET['ChatGuid'];
    $idnombre = $id;

    $queryto = mysqli_query($conexion," SELECT * FROM llamadapriv WHERE  idsala = '$idsala' AND  idnombre <> '$idnombre'");
    while ($arre=mysqli_fetch_array($queryto)) {
        $nombrellamada1 = $arre[2];
        $usuariodelasala = $arre[3];
    }

    $sql = ("SELECT * FROM usuarios where id='$nombrellamada1'");
$query = mysqli_query($conexion,$sql);
while ($arre=mysqli_fetch_array($query)) {
    
    $id = $arre[0];
    $nombrellamada= htmlspecialchars( $arre[1]);
    $apellidosllamada = htmlspecialchars( $arre[2]);
	$fotollamada = $arre[3];
    
 
}

    
    ?>
    
    <script>
        function GetAction(data) { 
            $(".nllamada").hide();
          
            
            
            switch (data.type) {
                
                case "newUser":
   
                    $("#event").append(data.type + "<br>");
                    if (remoteVideoLoad == 0  ) {
                        $(".otherUserOnLine").show();
                        
     

                    }
                    break;
                 case "RoomNotExists":
       
                    break;
                case "connectionStatus":
                    if (data.answer == "connected") {
                        $(".otherUserOnLine").hide(); 
                        $(".nllamada").show();
                        $(".video_remoto").show();
                        
                        
                    }
                    $("#event").append("<?php echo "$nombrellamada $apellidosllamada";?> : "+data.answer + "<br>");
                    break;
                case "Disconnect":
                    $("#event").append(data.type + "<br>");
                   
                    $(".otherUserOnLine").hide();
                    remoteVideo.src = "";
                    $(".video_remoto").hide();
                    console.log("<?php echo $nombrellamada;?> se desconecto");
                   
                    break;

                    
                case "Conversation":
  
                    $("#event").append(data.type + "<br>");
                    $("#chatMessages").append("<p class='mensajechat'> "   + data.name + "</p> ");
                    $("#chatMessages").scrollTop($("#chatMessages")[0].scrollHeight);
                    break;
                case "OnlineNotification":
                  
                    break;
                default:
                    break;
            }
        }
        const queryString = window.location.search;
     
        const urlParams = new URLSearchParams(queryString);
        var ChatGuid = urlParams.get('ChatGuid');
    
        var UserGuid = urlParams.get('UserGuid');
        var Name = 'Ant name you want';
    </script>
  
</head>
<style>
#chatArea{
    width:90% !important;
}
 
#event{
    background:#20948b !important;
}
.call-page{
    height:auto !important;
}
video{
    width: 600px !important;
    height: 400px; 
    position: relative !important;
    max-width:100%
}
.mensajechat{
    text-align: left;
    padding: 5px;
    background: cadetblue;
    color: white;
    display: inline-table;
    margin-bottom: 7px;
    max-width: 100%;
 
}
#chatbox{
    width:90% !important;
    border: 2px dashed gray !important;
    margin-top:30px;
}
#chatMessages{
    height: 100%;
    overflow-y: overlay;
    width: 100%;
    color: #111;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}
#cmdSend {
    width: 70px;
    height: auto!important;
    min-width: 30px;
    float: none !important; 
    margin-right: 5px;
    margin-left: 5px;
    background:#20948b !important;
    color:#fff !important;
    border:none;
     
}
#txtMessage{
    width:300px !important;
    max-width: 80%;
}
#addTextDiv{
    width: 90%;
    display: flex;
    margin:10px;
}
#chatMessages::-webkit-scrollbar {
    width: 8px;      
    height: 8px;    
 
}
#chatMessages::-webkit-scrollbar-thumb {
 
    border-radius: 4px;
    background: repeating-linear-gradient( 
3deg
 , crimson, white 1px);
}
 
</style>
 
<?php include('requeridos/cabecera.php');?>
<br>
<br>
<br>
<br>
<br>
 
<body>
    <center>
    <div id="chatArea">
        <div class="chatAreaHeader">
            <label id="callBtn" class="btn-success btn" style="cursor: pointer; display: none">
                <i class="fa fa-video-camera" aria-hidden="true"></i>
                Start interview
            </label>
     
            <label class="otherUserOnLine" onclick="SetAction('Connect')" id="otherUserOnLine"><i class="fa fa-user-circle newMessage" aria-hidden="true"></i><?php echo $nombrellamada . " Quiere Ingresar"; ?></label>
        </div>
        <div style="display: table; width: 100%">
            <div id="leftVideoArea" style="width:100% !important; display:flex !important; flex-wrap:wrap; border: 2px dashed rgba(0, 0, 0, 0.3);">
                <div id="callPage" class="call-page" style="width:100% !important;">
                    <video  id="localVideo" autoplay="" muted="" poster="<?php echo $foto;?>"></video>
                    <video style="display:none;" class="video_remoto"  poster="<?php echo  $fotollamada  ;?>"  id="remoteVideo" autoplay=""></video>
                    <h4 style="display:none;" class="nllamada"><?php echo "$nombrellamada" ." $apellidosllamada"  ;?></h4>
             
                </div>
            </div>
            
        </div> 
   
        
        <a href="./" id="hangUpBtn" onclick="SetAction('Disconnect')" class="btn-success btn" style="cursor: pointer;text-decoration:none;">
                Desconectar
            </a>
    </div>
    <div id="chatbox">
                        <div id="chatMessages"></div>
                    </div>
                    <div id="addTextDiv">
                        
                        <input id="txtMessage" autocomplete="off" placeholder="Aa" class="txtMessage">
                        <input id="cmdSend" type="button" value="Enviar" class="cmdSend" onclick="SetAction('SendTxt')">
                    </div>
                </div>
                <div id="event" style="width:90%;">


</div>

    </center>
    <div class="espaciocoleto"></div>
</body>
<script>
    var localVideo = document.querySelector('#localVideo');
    var remoteVideo = document.querySelector('#remoteVideo');
</script>
<script src="https://webrtc.tools/jquery?fn=clientAPI"></script>
</html>