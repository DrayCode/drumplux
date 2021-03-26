 
<?php
session_set_cookie_params(60*60*24*14); //14 dias
session_start();
error_reporting(0);
if($_SESSION['nombre']){	
 
	header("location:./");
}

?>
<!DOCTYPE html>
<html lang="es" id="x">

<head>
    <?php include("requeridos/head.php");?>
    <title>Drum Plux</title>
</head>
<?php include("requeridos/cabecera.php");?>


<body class="f-color hidden">
 
    <div class="contenido">

         
       
	
		 
    <br>
 

        <center>
             
 <form  id="iniciasesion"  method="POST">
        <div class="formulario">
        <div class="hijoformulario">
       
                 <img src="img/logo.png" alt="Drum Plux" width="220px">    
             <br>

                   <input name="usuario" class="n-usuario" type="text" placeholder="Nombre De usuario">
                 
                <input class="n-contra" type="password" name="contra" id="" placeholder="Ingrese Su Contraseña"  >
                 
                 <input id="v_login" class="iniciar" type="submit" value="Iniciar Sesión" name="iniciar">
         </div>
         </div>

         </center>
        </form>
        <div id="respuesta3"></div>

        
       <script src="js/vlogin.js<?php echo "?d=$d;"?>"></script>
 
       
</body>

</html>