<!DOCTYPE html>
<html lang="es">
<?php 
$ida=$_POST['id'];
 
include('requeridos/conexion.php');
$sql = "SELECT * FROM usuarios WHERE id='$ida'";
$query = mysqli_query($conexion,$sql);
while ($arre=mysqli_fetch_array($query)){
     
 $idu = $arre[0];
 $nombreu = $arre[1];
 $apellidosu = $arre[2];
 $fotou = $arre[3];
 $paisu = $arre[4];
 $ciudadu = $arre[5];
 $usuariou = $arre[6];
 $claveu = $arre[7];
 $rolu = $arre[8];
 $verifiu = $arre[9];
 $coloru = $arre[10];
}
if ($query  ->num_rows == 0) {
    
echo "<script>alert('No puedes copiar y pegar el link tienes que iniciar sesion');</script>";
header("location:../");

    

}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$nombreu $apellidosu";?></title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../icono/style.css">
</head>
<?php
error_reporting(0);
session_start();
if ($_SESSION['nombre']){ 
   
$id= $_SESSION['id'];
require("requeridos/conexion.php");
$sql = ("SELECT * FROM usuarios where id=$id");
$query = mysqli_query($conexion,$sql);
while ($arre=mysqli_fetch_array($query)){
    
    $id = $arre[0];
    $nombrec= htmlspecialchars( $arre[1]);
    $apellidos = htmlspecialchars( $arre[2]);
	$foto = $arre[3];
    $pais = $arre[4];
    $ciudad = $arre[5];
    $usuario = htmlspecialchars( $arre[6]);
    $clave = $arre[7];
    $rol = $arre[8];
    $verifi = $arre[9];
    $color = $arre[10];

}
}
if ($_SESSION['nombre']){ 
$foto = $foto;
}
else{
    $foto = "img/usuario.svg";
}

if ($pagina =="inicio") {
    
    echo "<style>.icon-newspaper{
    
        color:#20948b;
        border-bottom:2px solid;

    }</style>";

}elseif ($pagina=="casa") {
    echo "<style>.icon-home3{
    
        color:#20948b;
        border-bottom:2px solid;

    }</style>";
}elseif ($pagina=="empezar") {
    echo "<style>.icon-tv{
    
        color:#20948b;
        border-bottom:2px solid;

    }</style>";
}
?>
<header>
        <a class="logoca" href="./"> <img class="" src="../img/logo.png" width="50px" alt=""> <span class="l-responsive" >Drum Plux</span> </a>
    
        <nav class="menu">
            <li class="no-responsive"><a href="./"><span class="icon-home3"></span></a></li>
            <li class="no-responsive"><a href="noticias"><span class="icon-newspaper"></span></a></li>
            <li class="no-responsive"><a href="#"><span class=" icon-headphones"></span></a></li>
            <li class="no-responsive"><a href="empezar"><span class="icon-tv"></span></a></li>
          
            <input type="checkbox" name="" id="usuario" onclick="document.documentElement.classList.toggle('lista-activada')">
            <label for="usuario" class="usuario">
            <img src="<?php echo "../$foto";?>" alt="" width="30px" style="border-radius:50%; max-width:30px;">
            </label>
 
          
             <div class="lista">
             <?php  
if ($_SESSION['nombre']){
 
    echo '<li class="m-responsive"><a href="../">Inicio</a></li>
          <li class="m-responsive"><a href="../noticias">Noticias</a></li>
          <li><a href="perfil">Mi perfil</a></li>
          <li><a href="editar">Editar </a></li>
          <li class="m-responsive"><a href="../empezar">Crear Sala</a></li>
          <li><a href="../cerrar">Salir</a></li>';
}else{	
         echo ' <li class="m-responsive"><a href="./">Inicio</a></li>
                <li><a href="../login">Inicia Sesión</a></li>
                <li><a href="../registrate">Registrate</a></li>';
}
?>
            </div>
            
        </nav>
        
    </header>
<body>
<br>
<br>
<br>
    <center>
<img src="<?php echo "../$fotou";?>" alt="" width="300px">
<br>
<?php


echo "<h3> $nombreu $apellidosu</h3>";


echo "
<br>
<form action='' merhod='POST'>
    <textarea name='' id='' cols='30' rows='10' style='margin: 0px; height: 151px; width: 420px;'></textarea> 
    <br>
     <button class='vermas' type='button'>Enviar Mensaje</button>
</form>";
 
?>
</center>
</body>
</html>