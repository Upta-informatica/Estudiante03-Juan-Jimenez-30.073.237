<?php 

class clientes{
        
        public function Insertar_clientes($nombre_completo,$direccion,$telefono){
                $modelo= new conexion();
                $con= $modelo->post_conexion();
                $sql= "INSERT INTO public.clientes(nombre_completo,direccion,telefono) VALUES(:nombre_completo,:direccion,:telefono)";
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
        public function Cargar_clientes(){
                $rows= null;
                $modelo= new conexion();
                $con= $modelo->post_conexion();
                $sql="SELECT * FROM public.clientes";
        $registro= $con->prepare($sql);
        $registro->execute();
        while ($resultado = $registro -> fetch()) {
                $rows[]=$resultado;
        }
        return $rows;}
    
        public function eliminar_clientes($id){
            $modelo= new conexion();
            $con= $modelo->post_conexion();
            $sql= "DELETE FROM public.clientes WHERE id=:id";
            $registro= $con->prepare($sql);
            $registro->bindParam(':id',$id);              
             $registro->execute();}
        
        public function Cargar_cliente($id){
        $rows= null;
        $modelo= new conexion();
        $con= $modelo->post_conexion();
        $sql=" SELECT * FROM public.clientes WHERE id=:id";
        $registro= $con->prepare($sql);
        $registro->bindParam(':id',$id);
        $registro->execute();
        while ($resultado = $registro -> fetch()) {
            $rows[]=$resultado;
        }
        return $rows;} 

        public function modificar_clientes($campo,$valor,$id){
        $modelo= new conexion();
        $con= $modelo->post_conexion();
        $sql="UPDATE public.clientes SET $campo= :valor WHERE id=:id";
        $registro= $con->prepare($sql);
        $registro->bindParam(':valor',$valor);
        $registro->bindParam(':id',$id);
        $registro->execute();}       


}

 ?>