<?php
include_once ('conexion.php');
include_once ('Funciones_doctores.php');
$carga= new doctores();
$mensaje= null;
$nombre_completo=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$id=$_POST['id'];

if(isset($_POST['Actualizar_datos'])){

	$mensaje=$carga->modificar_doctores("nombre_completo",$nombre_completo ,$id);
	$mensaje=$carga->modificar_doctores("direccion",$direccion ,$id);
	$mensaje=$carga->modificar_doctores("telefono",$telefono ,$id);
}

header("location:tabla_de_doctores.php");