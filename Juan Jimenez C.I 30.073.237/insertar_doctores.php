<?php
include_once ('conexion.php');
include_once ('Funciones_doctores.php');

$mensaje= null;

$nombre_completo=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

if(isset($_POST['registrarse'])){
	$carga= new doctores();
	$mensaje=$carga->Insertar_doctores($nombre_completo,$direccion,$telefono);}
	
header("location:tabla_de_doctores.php");
?>