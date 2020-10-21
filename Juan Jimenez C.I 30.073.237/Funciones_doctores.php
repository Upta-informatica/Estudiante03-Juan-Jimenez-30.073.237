<?php 

class doctores{
        
        public function Insertar_doctores($nombre_completo,$direccion,$telefono){
                $modelo= new conexion();
                $con= $modelo->post_conexion();
                $sql= "INSERT INTO public.doctores(nombre_completo,direccion,telefono) VALUES(:nombre_completo,:direccion,:telefono)";
                $registro= $con->prepare($sql);
                $registro->bindParam(':nombre_completo',$nombre_completo);
                $registro->bindParam(':direccion',$direccion);
                $registro->bindParam(':telefono',$telefono);                
                if (!$registro) {
                        return "error al crear registro";
                }
                else{
                        $registro->execute();
                        return"registro creado correctamente";}
                    }
        public function Cargar_doctores(){
                $rows= null;
                $modelo= new conexion();
                $con= $modelo->post_conexion();
                $sql="SELECT * FROM public.doctores";
        $registro= $con->prepare($sql);
        $registro->execute();
        while ($resultado = $registro -> fetch()) {
                $rows[]=$resultado;
        }
        return $rows;}

        public function eliminar_doctores($id){
                $modelo= new conexion();
                $con= $modelo->post_conexion();
                $sql= "DELETE FROM public.doctores WHERE id=:id";
                $registro= $con->prepare($sql);
                $registro->bindParam(':id',$id);              
                $registro->execute();}

        public function Cargar_doctor($id){
        $rows= null;
        $modelo= new conexion();
        $con= $modelo->post_conexion();
        $sql=" SELECT * FROM public.doctores WHERE id=:id";
        $registro= $con->prepare($sql);
        $registro->bindParam(':id',$id);
        $registro->execute();
        while ($resultado = $registro -> fetch()) {
            $rows[]=$resultado;
        }
        return $rows;} 

        public function modificar_doctores($campo,$valor,$id){
        $modelo= new conexion();
        $con= $modelo->post_conexion();
        $sql="UPDATE public.doctores SET $campo= :valor WHERE id=:id";
        $registro= $con->prepare($sql);
        $registro->bindParam(':valor',$valor);
        $registro->bindParam(':id',$id);
        $registro->execute();}       

}
 ?>