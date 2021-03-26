
<?php
$pagina ="casa";
session_set_cookie_params(60*60*24*14); //14 dias
session_start();
error_reporting(0);

if (@!$_SESSION['nombre']){
 
?>
<!DOCTYPE html>
 
<html lang="es" class="html">

  
<head>
<title>  Drum Plux</title>
    <?php include('requeridos/head.php');?>
 
</head>
<?php include("requeridos/cabecera.php");?>
<br>
<br>
<br>
<br>

<div class="header">
    <div class="texto">
        <div class="textico">
            <h1>Hola Que tal!</h1>
            <p class="p1">Hola, Drum Plux es una Pagina web dedicada mas que nada para que puedas hacer video llamadas
                con
                cualquier persona del mundo de forma aleatoria.
            </p>
            
            <img src="img/inicio.svg" alt="" width="480px">
            
            <br>
            <a href="#" onclick="abrirUrl('empezar','contenedor_principal')"class="empezar" >Empezar</a>

        </div>
    </div>
</div>
<br>
<br>
<br>

<body>
    <div class="contenido">

        <div class="t-personas">
            <h2>Personas destacadas   <i class="icon-clipboard"></i></h2>
            
        </div>
        <br>
        <div class="tarjeticas" >

            <?php
               
               include('requeridos/conexion.php');
               $sql = "SELECT * FROM usuarios WHERE verificacion ='si' order by  id  limit 9 ";
               $query = mysqli_query($conexion,$sql);
               while ($arre=mysqli_fetch_array($query)){
                    
                $id = $arre[0];
                $nombre = $arre[1];
	            $apellidos = $arre[2];
	            $foto = $arre[3];
                $pais = $arre[4];
                $ciudad = $arre[5];
                $usuario = $arre[6];
                $clave = $arre[7];
                $rol = $arre[8];
                $verifi = $arre[9];
                $color = $arre[10];


                echo "<div class='personas'>
            
                <a href='#' target='_blank'>
                     <img src='$foto' alt='$nombre $apellidos' width='300px' height='300px'>
                </a>
                <div class='t-card'>
                 <center>
                     <a href='#' target='_blank'>$usuario <i title='verificado' class='_verified'></i></a>
                 </center>
                 </div>
 
             </div>";
               }
 
            ?>
           
            
        

    </div>
    <br>

     <br>
     <div class="espaciocoleto"></div>
 
</body>

</html>

<?php
}else{
if ($verifi == "si") {
    $verificacion = "<i title='verificado' class='_verified'></i>";
}else{
   $verificacion = NULL;
}

?>



<!-- luego de iniciar session -->



<!DOCTYPE html>
 
<html class="html" lang="es"  >

  
<head>
<title>Inicio - Drum Plux</title>
    <?php include('requeridos/head.php');?>
    <link rel="stylesheet" href="css/red.css<?php echo "?d=$d;"?>">
</head>

<body>

<?php include("requeridos/cabecera.php");?>
<br>
<br>
<br>

    <div class="l_iz">

        <center>
          
            <br>
            <?php
           include('requeridos/conexion.php');
           if ($ciudad == "NULL") {
               
           ?>

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

           }else{
            echo "<h3>Personas de $ciudad   <i class='icon-users'></i></h3>";
            echo '<input type="search" name="" id="user_search" placeholder="Escribe el nombre de usuario">';
            $sql = "SELECT * FROM usuarios WHERE ciudad ='$ciudad' AND pais = '$pais' and   id <> '$id'     ";
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
 
             if ($verifi_ == "si") {
                 $verificacion = "<div title='verificado' class='_verified'></div>";
             }else{
                $verificacion = NULL;
             }
             
             if ($query > 0 ) {
                echo "";
             }else{
                 echo "No hay usuarios que vivan en tu ciudad";
             }

             echo "
             
             <div class='cartelp'>
             
             <a   href='#'>
             <div class='_foto_' style='background-image: url($foto_);'></div>
  
             $nombre_ $apellidos_ $verificacion </a>
             <form action='ver/$usuario_' method='POST'>
 
             <input type='hidden' name='id' value='$id_'>
             <input class='vermas' type='submit' value='Mensajear'>
 
             </form>
             </div> ";
               }
           }
?>
        </center>
        </center>

    </div>

  

    </div>
    <input id="l_iz" type="checkbox" id="" onclick="document.documentElement.classList.toggle('l_iz_activo')" >
<label for="l_iz" class="r_barra">
     <i class="icon-arrow-right2"></i>
     
     </label>
     <input id="l_iz" type="checkbox" id="" onclick="document.documentElement.classList.toggle('l_iz_activo')" >
<label for="l_iz" class="r_barra">
      
     <i class="icon-arrow-left2"></i>
     </label>
    
    <center>
    <div  class="fpus" style="background-image: url(<?php echo $foto;?>)"></div>
    </center>
            <div class="publicar">
                
               
                <input type="checkbox" name="" id="publicar_" onclick="document.documentElement.classList.toggle('a_publicar')">
               
                <br>
                <label  for="publicar_">
                   
                    <div class="clickparapublicar"><p>Click Para Comenzar a Publicar</p></div>

                </label>



         
          
            </div>

            <form action=""> 
            <label  for="publicar_">
            <div class="acpublicar">

         <center>
             <div class="acpublicar_hijo">
           <br>
        
         
              
                <textarea name="" id="" placeholder="Hola Yo soy <?php echo "$nombrec $apellidos" ;?> "></textarea>
               <div class="visualizacionda">
                    <img id="imgpublicar">
                     
               </div>
                <br>
                <input type="file" name="" id="anx_img" accept="image/gif,image/png,image/jpeg"  hidden="hidden">
                
 
                <div class="opcionesppublicar">

                <label for="anx_img">
                    <i class="icon-images"></i>
                </label>
                
                <label for="">
                    <i class="icon-wink"></i>
                </label>
                <label for="">
                    <i class="icon-youtube"></i>
                </label>
                <label for=" ">
                    <i class="icon-attachment"></i>
                </label>
                <label for="">
                    <i class="icon-music"></i>
                </label>
                <label for="">
                <i class="icon-embed2"></i>
                </label>
                
                </div>
                
                
                <input class="bttpublicar" type="button" value="Publicar" name="publicar">
                </div>
         </center>

            </div>  </label>

        </form>

        <br>
        <center>
            <div class="hr_gris_corto"></div>
        </center>
        <br>
        <center>
            <div class="publicaciones" >
                <div class="contentp">

                    <div class="dep"><img src="img/guille.jpg" alt="" width="30px"> <span id="dep"> Guille Castro <i
                                title='verificado' class='_verified'></i></span></div>
                    <br>
                     
                     
                    
                    <div class="imgpu" style="background-image: url(YXNsa2hmZHVpYWRmaGlqa2hzZGhiZnV/salchipapa.jpg); height:400px !important; max-height:100% !important;     background-size: contain !important;"  ></div>
                    <br>
                    <form action="">
                         <input type="hidden" name="" value="1">
                        <input type="checkbox" name="like" id="like">
                    </form>
                    <p class="likep"><label class="likek" for="like"> <i class="icon-heart"> </i> </label>99999</p>
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

     
           



            

        </center>
        <div class="espaciocoleto"></div>
        <?php require('requeridos/chat.php'); ?>
     
 
    <script  type="text/javascript" src="js/recargarms.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/mensaje.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/alertas.js<?php echo "?d=$d;"?>"></script>
    <script>
    
    function init() {
  var inputFile = document.getElementById('anx_img');
  inputFile.addEventListener('change', mostrarImagen, false);
}

function mostrarImagen(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('imgpublicar');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

window.addEventListener('load', init, false);

    </script>
     
      
    
</body>

</html>
<?php } ?>



