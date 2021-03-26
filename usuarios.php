<html lang="es" class="htmlprincipal">

<head>
    <?php include("requeridos/head.php");?>
    <title>Drum Plux</title>
</head>
<?php include("requeridos/cabecera.php");?>
<br>
<br>
<br>
<br>

 
<br>
<br>
<br>

<body>
<?php 
  include('requeridos/conexion.php');
$sql = "SELECT * FROM usuarios   ";
               $query = mysqli_query($conexion,$sql);

               $numusuarios = mysqli_num_rows ($query);

?>
    <div class="contenido">

        <div class="t-personas">
            <h2>Usuarios:  <b><?php echo $numusuarios;?></b></i></h2>
            
        </div>
        <br>
        <div class="tarjeticas" >

            <?php
               
               include('requeridos/conexion.php');
               $sql = "SELECT * FROM usuarios   order by  id desc  limit 18";
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
                     <img src='$foto' alt='$nombre' width='300px' height='300px'>
                </a>
                <div class='t-card'>
                 <center>
                     <a href='#' target='_blank'>$nombre  </a>
                 </center>
                 </div>
 
             </div>";
               }
 
            ?>
           
            
        

    </div>
    <br>

     <br>
  <script src="js/loader.js"></script>
</body>

</html>
