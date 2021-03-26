<!DOCTYPE html>
<?php include('requeridos/session.php'); error_reporting(0);?>
 <style>
 
body{
    background: -webkit-linear-gradient(top left, #3bcfcd 0%, #33ca8b 100%);
}

 </style>
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
<br>
<?php
 
if ($verifi == "si") {
    $verificacion = "<div title='verificado' class='_verified'></div>";
}else{
   $verificacion = NULL;
}

?>
<body class="f-color">
 
        <div class="perfil">
        <center>
            <div class="f-perfil" style="background-image: url(<?php echo $foto;?>)"></div>
         
        <br>
        
             
                    <h3 class="n-principal"> <?php echo" $nombrec $apellidos $verificacion";?> </h3>
                    <?php
                    
                    
                  $xcolor = "#ffffff";
                  $zcolor = "#fffff";
                  $acolor = "#ffff";
                  $bcolor = "#fff";
                  if ($color==$xcolor || $color==$zcolor || $color==$acolor|| $color==$bcolor ) {
                     $colorr = "#000";
                  }else{
                      $colorr = $color;
                  }


                    ?>
                
                <div class="info-usuario">
                <br><h3>País: <?php echo"$pais";?></h3>
                <br><h3 class="t-color" >Color Favorito: <div class="color" style='background: <?php echo"$colorr";?>;'></div></h3>
                <br><h3>usuario: <?php echo"$usuario";?></h3> 
                <br><h3>Verificación: <?php echo"$verifi";?></h3>   
                <br><h3>          <?php
 if ($rol==0 && $_SESSION['nombre']) {
    echo "<form action='' method='post'>
    <input type='submit' name='borrar' value='Borar chat'>
    </form>";
 }else{
     echo "";
 }

 if (!empty($_POST['borrar'])) {
     $sql = "DELETE FROM `chat_general`";
     $resborrar=mysqli_query($conexion,$sql);
 }else{
     echo"";
 }
?></h3>
            </div><div class="espaciocoleto"></div>
                
                </center>
       
        <br>
    </div>
    
    <?php require('requeridos/chat.php'); ?>
    
  
    <script  type="text/javascript" src="js/recargarms.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/mensaje.js<?php echo "?d=$d;"?>"></script>
    <script  type="text/javascript" src="js/alertas.js<?php echo "?d=$d;"?>"></script>
    
     
      
     

</body>

</html>