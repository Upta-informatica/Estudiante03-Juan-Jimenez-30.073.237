<?php
include_once ('usuarios.php');
include_once ('inicio_de_sesion.php');
include_once ('conexion.php');
$user= new usuario();
$UserSession= new sesion_de_usuario();
if(isset($_SESSION['email'])){
$user->SetUsuario($UserSession->GetSesion());
include_once('menu.php');
}
elseif (isset($_POST['email'])&& isset($_POST['password'])){
	$email=$_POST['email'];
	$NoEncriptada=$_POST['password'];
	$password=crypt($NoEncriptada,"##");
	if ($user->VerificarUsuario($email,$password)){
			$user->SetUsuario($email);
			$UserSession->incio_sesion($email);
			include_once 'menu.php';}
	else{
			$error="Usuario y/o contraseña son incorrecta";
			include_once('Formulario_login.php');
		}
	}
else{header("location:index.html");}
?>