<?php  

class sesion_de_usuario{

	public function __construct(){
		session_start();
	}

	public function incio_sesion($email){
		$_SESSION['email']=$email;
	}

	public function GetSesion(){
		return $_SESSION['email'];
	}

	public function cerrar_sesion(){
		session_unset();
		session_destroy();
	}

}
?>