<?php
include_once ('conexion.php');
include_once ('Funciones_mascota.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$carga= new mascotas();
	$mensaje=$carga->eliminar_mascotas($id);}
header("location:tabla_de_mascotas.php");
?>