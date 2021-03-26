<!DOCTYPE html>
<?php include('requeridos/session.php');error_reporting(0);?>
<html lang="es">
<head>
    <title>Empieza a Charlar</title>
    <?php include('requeridos/head.php');?>
    <link rel="stylesheet" href="css/perfil.css<?php echo "?d=$d";?>">
</head>
<?php include('requeridos/cabecera.php');?>
<br>
<br>
<br>
<br>
<style>
 
 
 
body{
    background: -webkit-linear-gradient(top left, #3bcfcd 0%, #33ca8b 100%);
}
 
</style>
<?php
$si = "si";
if ($verifi==$si) {
    $verificacion = "<i title='verificado' class='icon-checkmark2'></i>";
}else{
    $verificacion = NULL;
}

?>
       <body class="f-color">
 
               <div class="perfil">
               <center>
               <div class="f-p2">
                   <div  class="f-perfil" style="background-image: url(<?php echo $foto;?>)"><img  id="imgcambiar"   width="300px"></div>
                   </div>
        
               <label class="u_foto" for="u_foto">
        
               <i class="icon-camera"></i>

               </label>
               <br>
       
             
                 
                   
                 <div class="info-usuario">
                <form method="post" id="actualizardatos" enctype="multipart/form-data">
                <input type="file" name="foto" id="u_foto" accept="image/gif,image/png,image/jpeg"   hidden="hidden">    
                <div id="caja"> 
                <h4 class="">
              <h4 class="barra_azul" id="barra_estado">
            <span></span>
        </h4>
    </h4>
    <br>
 
                   <h4>Nombres <input name='nombre' class="input" type="text" value="<?php echo"$nombrec";?>"> </h4>
                   <br>
                   <h4>Apellidos <input name='apellidos' class="input" type="text" value="<?php echo"$apellidos";?>"> </h4>
                   <br>
                   <h4>
                       Usuario: <input name='usuario' class="input" type="text" value="<?php echo"$usuario";?>"> 
                   </h4>
                   
                   <br>
                            
                     <?php 

               

                     if ($ciudad=="NULL"){
                     include('requeridos/conexion.php');
                    ?>
                     <select class='input' name='ciudad' id='' style="width:250px; max-width:95%;" required>
                          <?php

                     echo "<option  value=''>Seleccione Su Ciudad</option>";
                     $conexion->set_charset("UTF8");
                     $sql2 = "SELECT * FROM usuarios  where id = '$id'" ;
                      $query2 = mysqli_query($conexion,$sql);
                      
                       while ($arre=mysqli_fetch_array($query2)) {  
                       $p_valid = $arre[4];
                
                       }
                       $sql3 = "SELECT * FROM paises  where nombre = '$pais'" ;
                       $query3 = mysqli_query($conexion,$sql3);
                       while ($arre=mysqli_fetch_array($query3)) {  
                       $i_valid = $arre[1];
                
                       }

                       $sql = "SELECT * FROM ciudades WHERE Paises_Codigo = '$i_valid'" ;
                       $query = mysqli_query($conexion,$sql);
                       while ($arre=mysqli_fetch_array($query)) {  
                       $iso = $arre[1];
                       $nombre = $arre[2];
                       echo "<option  value='$nombre'>$nombre ($iso)</option>";
                
                        } ?>
                 </select>
                 <br>
                <?php
                
               }else{

                echo "<h4>
                Su clave: <input name='clave' class='input' type='password' value='$clave'> 
                </h4>";

               }
               ?>

              <br>
              <h4>
                Su Color : <input class="e-color" name="color" type="color" value="<?php echo"$color";?>"> 
            </h4></div>
            <br>

            <input type="hidden" name="id" value="<?php echo $id ; ?>" style="display:none;">
          
            <button id="b_actualizar" name="guardar"  class="input" type="submit"  >Guardar</button>
          
            
 
         </form>

         <div id="respuesta2"></div>
            </div>
            <div class="espaciocoleto"></div>
                
                </center>
       
        <br>
    </div>
 


<br>
<?php require('requeridos/chat.php'); ?>




     
       
       <script src="js/actualizardatos.js<?php echo "?d=$d;"?>"></script>
      
      <script  type="text/javascript" src="js/recargarms.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/mensaje.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/alertas.js<?php echo "?d=$d;"?>"></script>
    <script>
    
    function init() {
  var inputFile = document.getElementById('u_foto');
  inputFile.addEventListener('change', mostrarImagen, false);
}

function mostrarImagen(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('imgcambiar');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

window.addEventListener('load', init, false);

    </script>
     

</body>

</html>