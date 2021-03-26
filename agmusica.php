<?php

$pagina = "musica";
  require('requeridos/session.php'); 



if (!empty($_POST['subir'])) {
    require('requeridos/conexion.php');
    $archivo = base64_encode($_FILES['archivo']['name']);
    $ruta = ($_FILES['archivo']['tmp_name']);
    $destino = 'm/'.$archivo;
    $nombrem = $_POST['nombrem'];
    $numc_n = strlen($nombrem);
    

    if (file_exists($destino)) {


        echo "<script>alert('el archivo ya existe');</script>";

    }else {

        $sql = mysqli_query($conexion, "INSERT INTO `musica` (`id`, `nombre`, `ruta`) VALUES (NULL, '$nombrem', '$destino'); ");


        copy($ruta, $destino);
        echo "<script>alert('el archivo Se subio exitosamente');</script>";
    }
}

?>
<head>

<?php require('requeridos/head.php');?>

</head>

<?php require('requeridos/cabecera.php');?>
<br>
<br>
<br><center >
    <body >
    <form action = "" method = "post" enctype = "multipart/form-data">

<br>
<br>
<br>
    <div class='tarjeticas'>
      <div class='personas' style='background:#eee;'>
      <embed src="img/audio.jpg" id="blah" type="" width='100%' height='300px'>
      <center>
        <input type="text" name="nombrem" id="" placeholder="Titulo" required style="width:90%;"  >
        <?php echo $numc_n;?>
      </center>
 
     
      
        <div class='ard-body'>
          <p class='card-text'></p>
          <div class='d-flex justify-content-between align-items-center'>
            <div class='btn-group'>
            
            </div>
            
            <small class='text-muted'> </small>
          </div>
        </div>
      </div>
    </div> 
    <br >
    <input type = "file" name = "archivo" id = "" enctype = "multipart/form-data" onchange = "document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" accept = "audio/*" required >
    <input type = "submit"
value = "Subir"
name = "subir" >
    </form> 