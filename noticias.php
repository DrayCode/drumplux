
<?php if (@!$_SESSION['nombre']){
 

}  error_reporting(0);?>
<?php

$pagina ="inicio";

if ($verifi == "si") {
    $verificacion = "<i title='verificado' class='_verified'></i>";
}else{
   $verificacion = NULL;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('requeridos/head.php');?>
    <title>Ultimas Noticias - Drum Plux</title>
    <link rel="stylesheet" href="css/red.css">

</head>
<?php include("requeridos/cabecera.php");?>
<br>
<br>
<br>
<br>
<br>

<body>

    <div class="l_iz">

        <center>
            <h3>Usuarios Destacados <i class="icon-star-empty"></i></h3>
            <br>

   


            <?php
include('requeridos/conexion.php');
$sql = "SELECT * FROM usuarios WHERE verificacion ='si' order by  id  limit 9 ";
$query = mysqli_query($conexion,$sql);
while ($arre=mysqli_fetch_array($query)){
     
 $id_ = $arre[0];
 $nombre_ = $arre[1];
 $apellidos_ = $arre[2];
 $foto_ = $arre[3];
 $pais_ = $arre[4];
 $ciudad_ = $arre[5];
 $usuario_ = $arre[6];
 $clave_ = $arre[7];
 $rol_ = $arre[8];
 $verifi_ = $arre[9];
 $color_ = $arre[10];


 echo "<div class='cartelp'>
 <a target='_blank' href='#'>
 <div class='_foto_' style='background-image: url($foto_);'></div>
 
 $nombre_ <i title='verificado' class='_verified'></i> </a>
</div>";
}

?>
        </center>

    </div>
 
     <input id="l_iz" type="checkbox" id="" onclick="document.documentElement.classList.toggle('l_iz_activo')" >
<label for="l_iz" class="r_barra">
      
     <i class="icon-arrow-left2"></i>
     <i class="icon-arrow-right2"></i>
     </label>
    <center>
         
          <br>
        <center>
        <div class="publicaciones" >
                <div class="contentp">

                    <div class="dep"><img src="img/guille.jpg" alt="" width="30px"> <span id="dep"> Guille Castro <i
                                title='verificado' class='_verified'></i></span></div>
                    <br>
                     
                    <div class="textp" >
                  <p>En drum plux puedes hacer una variedad de cosas como publicar memes hacer llamadas al azar y también puedes chatear con todos en el chat global
                    </p>
                   </div>
                    
                    <div class="imgpu" style="background-image: url(img/fin.png);"></div>
                    <br>
                    <form action="">
                         <input type="hidden" name="" value="1">
                        <input type="checkbox" name="like" id="like">
                    </form>
                    <p class="likep"><label class="likek" for="like"> <i class="icon-heart"> </i> </label>    99999</p>
                    <br>
                    <br>
                </div>
            </div>

            <div class="publicaciones" >
                <div class="contentp">

                    <div class="dep"><img src="img/guille.jpg" alt="" width="30px"> <span id="dep"> Guille Castro <i
                                title='verificado' class='_verified'></i></span></div>
                    <br>
                     
                    <div class="textp" >
                  <p>HOLALALALALA
                    </p>
                   </div>
                    
                    <div class="imgpu" style="background-image: url(img/OIP.gif);"></div>
                    <br>
                    <form action="">
                         <input type="hidden" name="" value="1">
                        <input type="checkbox" name="like" id="like">
                    </form>
                    <p class="likep"><label class="likek" for="like"> <i class="icon-heart"> </i> </label>    99999</p>
                    <br>
                    <br>
                </div>
            </div>

            <div class="publicaciones" >
                <div class="contentp">

                    <div class="dep"><img src="img/guille.jpg" alt="" width="30px"> <span id="dep"> Guille Castro <i
                                title='verificado' class='_verified'></i></span></div>
                    <br>
                     
                    <div class="textp" >
                  <p>#EEUU Medios estadounidenses informan que altos funcionarios demócratas enviaron una carta al vicepresidente Mike Pence en la que proponen invocar la 25ª Enmienda para destituir al presidente Trump y de ser destituido, Pence asumiría el cargo.
                      #Teleprensa33 #Internacionales

                    </p>
                   </div>
                   
                    <br>
                    <form action="">
                         <input type="hidden" name="" value="1">
                        <input type="checkbox" name="like" id="like">
                    </form>
                    <p class="likep"><label class="likek" for="like"> <i class="icon-heart"> </i> </label>    99999</p>
                    <br>
                    <br>
                </div>
            </div>

        </center>
        <div >
        <?php require('requeridos/chat.php'); ?>
    
   
         
    <script  type="text/javascript" src="js/recargarms.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/mensaje.js<?php echo "?d=$d;"?>"></script>
   
     
    
</body>

</html>