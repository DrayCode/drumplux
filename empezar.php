<?php $pagina="empezar"; include("requeridos/session.php");error_reporting(0);?>
<!DOCTYPE html>
<?php require('requeridos/rand.php');?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Drum Plux - Creando Una Sala</title>
    <?php include("requeridos/head.php");?>
    <script src="js/crearsala.js"></script>
    <style>
        body {
            background-color: #0000004d;
        }

        div {
            box-sizing: border-box;
        }

        .mainDiv {
            width: 700PX;
            max-width:100%;
            margin: auto;
            background-color: #fff;
            height: auto;
            padding: 20px;
        }
        img,div,input,p,a,button{
            max-width:100%;
            text-decoration:none;
            border:none;
        }

            .mainDiv label {
                display: block;
                margin-bottom: 10px;
                width: 100%;
            }

        p {
            display: inline-block;
            margin-right: 10px;
        }

        #RoomID {
            
            padding: 5px;
            margin-top: 20px;
        }

        #bellowSection {
            margin-top: 30px;
            width: 100%;
        }

        .button {
            padding: 10px;
            background-color:  crimson;
            display: block;
            width: 150px  ;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .TITLE {
            COLOR: RED;
            FONT-WEIGHT: BOLD;
            BORDER-BOTTOM: 1PX SOLID #ec0c0c;
            FONT-SIZE: 30PX;
        }
        .crear{
            padding: 10px;
            background-color:  #20948b;
            display: block;
            width: auto !important;
            color: white;
            text-align: center;
            cursor: pointer;
            border:none;
            text-decoration:none;
        }
    </style>
</head>
<?php include("requeridos/cabecera.php");?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body><center>
    <form id="form1" runat="server">
        <div class="mainDiv">
        <img src="<?php echo "$foto";?>" alt="" width="300px">
        <br>
            
            <input class="crear" id="Button1" type="button" value="Click Aquí para crear una sala" onclick="CreateRoom()" style="margin-bottom:10px"/>
            <div id="errorDiv" style="display:none;background-color:red;color:white;padding:5px;box-sizing:border-box">


            </div>
            <div id="RoomID" style="display:none">
                
                

            </div>
           

            <div id="linkArea" style="display:none;margin-top:20px">

             
     
            </div>
            
        </div>
    </form></center>
    <div class="espaciocoleto"></div>
    <script src="js/libro.js<?php echo "?d=$d";?>"></script>
    <script src="js/portapapeles.js<?php echo "?d=$d";?>"></script>
</body>
</html>
