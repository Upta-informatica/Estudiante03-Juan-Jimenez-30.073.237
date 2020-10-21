<?php

class usuario{

private $email;

public function CrearUsuario($email,$password){
	$modelo= new conexion();
	$con= $modelo->post_conexion();
	$sql= "INSERT INTO public.usuarios(email,password) VALUES (:email,:password)";
	$registro= $con->prepare($sql);
	$registro->bindParam(':email',$email);
	$registro->bindParam(':password',$password);      
	if (!$registro) {
	 return "error al crear registro";
	}
	else{
	$registro->execute();
	 return"registro creado correctamente";}
	}

public function VerificarUsuario($email,$password){
    $modelo= new conexion();
    $con= $modelo->post_conexion();
    $sql=" SELECT * FROM public.usuarios WHERE email=:email";
    $registro= $con->prepare($sql);
    $registro->bindParam(':email',$email);
    $registro->execute();
    while ($resultado = $registro -> fetch()) {
    $rows[]=$resultado;
    foreach ($rows as $fila){
    if ($fila['email']==$email&&$fila['password']==$password){return true;}   
    else{return false;}
        }
    }
} 
public function SetUsuario($email){
    $modelo= new conexion();
    $con= $modelo->post_conexion();
    $sql="SELECT * FROM public.usuarios WHERE email=:email";
    $registro= $con->prepare($sql);
    $registro->bindParam(':email',$email);
    $registro->execute();
    foreach ($registro as $filas){
    	$registro->email=$filas['email'];
    }
}

public function GetUsuario(){
	return $registro->email;
}



}
  ?>