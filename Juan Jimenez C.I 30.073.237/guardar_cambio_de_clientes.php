<?php
include_once ('conexion.php');
include_once ('Funciones_clientes.php');
$carga= new clientes();
$mensaje= null;
$nombre_completo=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$id=$_POST['id'];

if(isset($_POST['Actualizar_datos'])){

	$mensaje=$carga->modificar_clientes("nombre_completo",$nombre_completo ,$id);
	$mensaje=$carga->modificar_clientes("direccion",$direccion ,$id);
	$mensaje=$carga->modificar_clientes("telefono",$telefono ,$id);
}

header("location:tabla_de_clientes.php");