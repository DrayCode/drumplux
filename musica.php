
    <?php
    $pagina="musica";
require('requeridos/session.php');
?>


<!DOCTYPE html >
    <html lang = "es" >
    <head >
    <meta charset = "UTF-8" >
    <meta name = "viewport"content = "width=device-width, initial-scale=1.0" >
    <title> Musica - Drum Plux </title> 
 
 
    <?php
 
 require('requeridos/head.php');
 ?>
    </head>

    <?php
 
 require('requeridos/cabecera.php');
 ?>
   <br>
   <center><h1>Musica - Drum Plux </h1></center>
   <br>
   <br>
   <style>
   
   audio{
    max-width: 90%;
   }
   </style>

    <body class='container'>
     <div class='row'>
     
     <div class="tarjeticas" >
         <?php
 
require('requeridos/conexion.php');
$sql = ("SELECT * FROM  musica  order by id desc ");
$query = mysqli_query($conexion, $sql);
while ($arreglo = mysqli_fetch_array($query)) {
    $id = $arreglo[0];
    $nombrem = $arreglo[1];
    $ruta = $arreglo[2];

    echo "<br>";
    echo "<br>";

  


    echo "<div class='personas'>
            
    <div>
         <img src='img/audio.jpg' alt='$nombrem' width='300px' height='300px'>
    </div>
    <div class='t-card'>
     <center>
         <h4>$nombrem <div title='verificado' class='_verified'></div></h4><br>
         <audio class='audio' src='$ruta ' controls></audio>
     </center>
     </div>

 </div>";

   

}

        


?>
</div>
</div>

<footer>
<?php 

if ($rol==0) {


 ?>
 <center><a href="agmusica"  >Agrega una canción</a></center>
 <?php
}else{
  echo "<center><p>Disfruta de la musica</p></center>";
}

?>



</footer>
<br>
<div class="espaciocoleto"></div>
</body>
<style>

    .audios {


        width: 90%;




    }

    .vista {
        margin - top:-90px;
        background: #000;



         color:white;



     }
     











     </style>



      



</body></center>



</html>