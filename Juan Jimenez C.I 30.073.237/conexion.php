<?php 

class conexion{
	public function post_conexion(){
		$contraseña = "1234";
		$usuario = "mascota";
		$nombreBaseDeDatos = "mascotas";
		$rutaServidor = "localhost";
		$puerto = "5432";
		$conexion = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
		return $conexion;
		}
}
 ?>
