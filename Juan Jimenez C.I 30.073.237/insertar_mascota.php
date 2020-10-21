<?php
include_once ('conexion.php');
include_once ('Funciones_Mascota.php');

$mensaje= null;
$nombre=$_POST['nombre'];
$tipo=$_POST['animales'];
$genero=$_POST['sexo'];
$estado=$_POST['estado'];
$fecha_nac=$_POST['fecha_nac'];
$propietario=$_POST['propietario'];

if(isset($_POST['registrarse'])){
	$carga= new mascotas();
 	$mensaje=$carga->Insertar_mascotas($nombre,$tipo,$genero,$estado,$fecha_nac,$propietario);
}
	
header("location:tabla_de_mascotas.php");
?>