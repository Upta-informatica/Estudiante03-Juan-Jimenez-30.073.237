<?php
include_once ('conexion.php');
include_once ('Funciones_clientes.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$carga= new clientes();
	$mensaje=$carga->eliminar_clientes($id);}
	echo "$id";
header("location:tabla_de_clientes.php");
?>