<?php
session_set_cookie_params(60*60*24*14); //14 dias
session_start();
error_reporting(0);
if($_SESSION['nombre']){	
 
	header("location:./");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('requeridos/head.php'); ?>
    <title>Registrate En Drum Plux</title>
</head>
<?php include('requeridos/cabecera.php'); ?>
<br>
<br>
<br>
<br>
<body class="f-color">
<div class="contenido">
<br>
<form action="" method="POST" enctype="multipart/form-data">

<center>
<div class="formulario">
 <div class="hijoformulario">
     <a href="#">
         <img id="blah" src="img/logo.png" alt="Drum Plux" width="210px">
     </a>    
     
      
     
           <input name="nombre" class="n-inputs" type="text" placeholder="Nombre" >
        
         <input name="apellidos" class="n-inputs" type="text" placeholder="Apellidos">
         
         <input name="usuario" class="n-inputs" type="text" placeholder="Nombre de Usuario" >
         
         <input class="n-inputs" type="password" name="contra" id="" placeholder="Ingrese Su Contraseña" >
         
         <select class='opciones' name='pais' id='' >
         <option  value=''>Seleccione Su País</option>
         <?php 
         include('requeridos/conexion.php');
         $sql = "SELECT * FROM paises";
         $query = mysqli_query($conexion,$sql);
         while ($arre=mysqli_fetch_array($query)) {  
        $iso = $arre[1];
        $nombre = $arre[2];
         echo "
         <option  value='$nombre'>$nombre ($iso)</option>";
         }
         ?>
         </select>
          
     
     <div class="color">Selecciona Tu color favorito: <input type="color" name="color" id="" value="#20948b"></div>
     
     <br>
          
      
     <input name="registrar" class="iniciar" type="submit" value="Registarse" >
     </div>
 </div>
 </center>
</form>


</div>

<?php

      if (!empty($_POST['registrar'])) {
  
        $nombrec = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $usuario = $_POST['usuario'];
        $pais = $_POST['pais'];
        $clave = $_POST['contra'];
        $color = $_POST['color'];
        $u_foto =$_FILES['foto']['name'];
        $ruta =$_FILES['foto']['tmp_name'];
        $tipo=$_FILES['foto']['type'];

             $jpg = "image/jpeg";
             $png = "image/png";
             $gif = "image/gif";
             if ($tipo == $jpg) {
            $tipo = ".jpg";
             }else{

             }
             if ($tipo == $png) {
            $tipo = ".png";
             }else{

             }
             if ($tipo == $gif) {
            $tipo = ".gif";
             }else{

             }

	          
             require('requeridos/rand.php');
	         $destino ='YXNsa2hmZHVpYWRmaGlqa2hzZGhiZnV/'.$d.$tipo;
             
        
        $query2 = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
        $result = mysqli_fetch_array($query2);
        if ($result > 0) {
            echo "<script>alert('El nombre de usuario Ya está en uso')</script>";
        }else{

        if ($nombre == NULL || $apellidos == NULL || $usuario == NULL || $clave == NULL || $pais == NULL){
            echo "<script>alert('Todos Los Datos son Obligatorios')</script>";
        }else{

         
       include('requeridos/conexion.php');
       $sql = mysqli_query($conexion,"INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `foto`, `pais`, `ciudad`, `usuario`, `clave`,`rol`,`verificacion`,`color`) VALUES (NULL, '$nombrec', '$apellidos', 'img/mp-foto.jpg', '$pais','NULL', '$usuario', '$clave','1','No','$color')");
       copy($ruta,$destino);
       echo "<script>alert('Usuario Registrado Con exito'); window.location.href = 'login';</script>";
       
       }
        
    }  
 
      }
       
     ?>

  
</body>
</html>