<?php

$host = "sv93.ifastnet.com";
$nombre = "rolpelis_guille";
$pass = "g85473604a";
$db = "rolpelis_drum";


$conexion = mysqli_connect($host,$nombre,$pass,$db);

if (!$conexion) {
    echo "error";
}




?>