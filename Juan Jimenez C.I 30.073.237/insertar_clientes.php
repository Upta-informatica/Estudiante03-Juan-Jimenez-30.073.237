<?php
include_once ('conexion.php');
include_once ('Funciones_clientes.php');

$mensaje= null;

$nombre_completo=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

if(isset($_POST['registrarse'])){
	$carga= new clientes();
	$mensaje=$carga->Insertar_clientes($nombre_completo,$direccion,$telefono);}
	
header("location:tabla_de_clientes.php");
?>