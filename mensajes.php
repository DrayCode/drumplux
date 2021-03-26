<!DOCTYPE html>
<?php require('requeridos/session.php'); ?>
<?php $pagina = "mensajes";?>
<html lang="es">
<head>
  <?php require('requeridos/head.php'); ?>
    <title>Mensajes - <?php echo $nombrec; ?></title>
    <link rel="stylesheet" href="css/mensajes.css">
</head>
<?php require('requeridos/cabecera.php'); ?>
<br>
<br>
<br>
<br>
<body>
    <div class = "msn_principal">
        <div class="buscador_msn">

        <input type="search" name="" id="msn_search" placeholder = "Buscar Mensaje">

        </div>
        <div class="lz_mensaje">
        
        <div class="p_mensajes">
        
        <div class="dat_img_mensaje">
        
        <img src="img/guille.jpg" alt="" width="70px">
        
        
        </div>
        <div class="dat_n_mensaje">
        
        <h3>Guille castro</h3>
        <span class="msn">Hola care verguita</span>
        
        </div>
        
        </div>
        
        </div>
        
        <div class="lz_mensaje">
        
        <div class="p_mensajes">
        
        <div class="dat_img_mensaje">
        
        <img src="img/isaac.jpg" alt="" width="70px">
        
        
        </div>
        <div class="dat_n_mensaje">
        
        <h3>Isaac Padilla</h3>
        <span class="msn">Pidele el cuadre a chelsea</span>
        
        </div>
        
        </div>
        
        </div>
    </div>
</body>
</html>