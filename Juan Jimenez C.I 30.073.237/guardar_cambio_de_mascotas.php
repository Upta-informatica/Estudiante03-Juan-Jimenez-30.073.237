<?php
include_once ('conexion.php');
include_once ('Funciones_Mascota.php');
$carga= new mascotas();
$mensaje= null;
$nombre=$_POST['nombre'];
$tipo=$_POST['animales'];
$genero=$_POST['sexo'];
$estado=$_POST['estado'];
$fecha_nac=$_POST['fecha_nac'];
$propietario=$_POST['propietario'];
$id=$_POST['id'];

if(isset($_POST['Actualizar_datos'])){

	$mensaje=$carga->modificar_mascota("nombre",$nombre ,$id);
	$mensaje=$carga->modificar_mascota("tipo",$tipo ,$id);
	$mensaje=$carga->modificar_mascota("genero",$genero ,$id);
	$mensaje=$carga->modificar_mascota("estado",$estado ,$id);
	$mensaje=$carga->modificar_mascota("fecha_nac",$fecha_nac ,$id);
	$mensaje=$carga->modificar_mascota("propietario",$propietario ,$id);}

header("location:tabla_de_mascotas.php");
?>
