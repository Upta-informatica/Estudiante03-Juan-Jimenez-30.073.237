<?php
include_once ('conexion.php');
include_once ('usuarios.php');
$email=$_POST['email'];
$NoEncrypt=$_POST['password'];
$password=crypt($NoEncrypt,'##');
if(isset($_POST['registrarse'])){
	$carga= new usuario();
	$mensaje=$carga->CrearUsuario($email,$password);}
?>