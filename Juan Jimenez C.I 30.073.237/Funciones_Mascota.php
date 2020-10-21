<?php 


class mascotas{
	
	public function Insertar_mascotas($nombre,$tipo,$genero,$estado,$fecha_nac,$propietario){
		$modelo= new conexion();
		$con= $modelo->post_conexion();
		$sql= "INSERT INTO public.mascotas(nombre,tipo,genero,fecha_nac,estado,propietario) VALUES(:nombre,:tipo,:genero,:fecha_nac,:estado,:propietario)";
		$registro= $con->prepare($sql);
		$registro->bindParam(':nombre',$nombre);
		$registro->bindParam(':tipo',$tipo);
		$registro->bindParam(':genero',$genero);
		$registro->bindParam(':estado',$estado);
		$registro->bindParam(':fecha_nac',$fecha_nac);
		$registro->bindParam(':propietario',$propietario);

		if (!$registro) {
			return "error al crear registro";
		}
		else{
			$registro->execute();
			return"registro creado correctamente";
		}

	}
	public function Cargar_mascotas(){
		$rows= null;
		$modelo= new conexion();
		$con= $modelo->post_conexion();
		$sql="SELECT mascotas.*,clientes.nombre_completo FROM mascotas INNER JOIN clientes ON mascotas.propietario = clientes.id";
        $registro= $con->prepare($sql);
        $registro->execute();
        while ($resultado = $registro -> fetch()) {
        	$rows[]=$resultado;
        }
        return $rows;
    }


        public function eliminar_mascotas($id){
                $modelo= new conexion();
                $con= $modelo->post_conexion();
                $sql= "DELETE FROM public.mascotas WHERE id=:id";
                $registro= $con->prepare($sql);
                $registro->bindParam(':id',$id);              
                $registro->execute();
                    
        }
        public function Cargar_mascota($id){
		$rows= null;
		$modelo= new conexion();
		$con= $modelo->post_conexion();
		$sql=" SELECT mascotas.*,clientes.nombre_completo FROM mascotas 
		INNER JOIN clientes ON mascotas.propietario = clientes.id
	    WHERE mascotas.id=:id";
        $registro= $con->prepare($sql);
        $registro->bindParam(':id',$id);
        $registro->execute();
        while ($resultado = $registro -> fetch()) {
        	$rows[]=$resultado;
        }
        return $rows;
    }
    	public function modificar_mascota($campo,$valor,$id){
    	$modelo= new conexion();
		$con= $modelo->post_conexion();
		$sql="UPDATE public.mascotas SET $campo= :valor WHERE id=:id";
		$registro= $con->prepare($sql);
        $registro->bindParam(':valor',$valor);
        $registro->bindParam(':id',$id);
        $registro->execute();
    	}

}

?>