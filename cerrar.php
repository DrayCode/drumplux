<?php 
session_start();
error_reporting(0);
if($_SESSION['nombre']){	
	session_destroy();
	echo "<script> javascript:location.reload(10000,10000)</script>";
}
else{
	echo "<script> javascript:location.reload(10000,10000)</script>";
}
?>