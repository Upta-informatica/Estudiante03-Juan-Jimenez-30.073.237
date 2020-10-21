<?php
include_once ('conexion.php');
include_once ('Funciones_doctores.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$carga= new doctores();
	$mensaje=$carga->eliminar_doctores($id);}
header("location:tabla_de_doctores.php");
?>