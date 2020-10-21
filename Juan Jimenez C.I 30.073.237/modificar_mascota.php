<?php 
include_once('conexion.php');
include_once('Funciones_Mascota.php');
?>
<!DOCTYPE html>
 <html>
 <head>
 <meta charset ="UTF-8">
 <title>mascotas</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css2/estilo_formulario_mascotas.css">
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 <style type="text/css">
 #caja{
  margin-top: 10%;
  margin-right: auto;
  margin-left: auto;
 }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="menu.php">inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="navegacion">tablas</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="tabla_de_clientes.php">clientes</a>
      <a class="dropdown-item" href="tabla_de_doctores.php">doctores</a>
      <a class="dropdown-item" href="tabla_de_mascotas.php">mascotas</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Prosesos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">reportes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">mantenimiento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">salir</a>
  </li>
</ul> 
</nav>
<?php 
if(isset($_GET['id'])){
  $consultas= new mascotas();
  $id=$_GET['id'];
  $filas = $consultas->Cargar_mascota($id);
  foreach ($filas as $fila){?>
            <div class="contenedor" id="caja">
            <form class="formulario" id="formulario" name="formulario"action="guardar_cambio_de_mascotas.php" method="POST"> 
                <div class="contenedor-inputs">

                  <?php echo'<input type="hidden" name="id" value="'.$id.'">
                  <input type="text" name="nombre" required value= "'.$fila['nombre'].'" pattern ="[a-záéíóúA-ZÁÉÍÓÚ ]*">';?>
                  <h5 class="text-center" style="margin-bottom: 5%">tipo de mascota</h5>
                  <div class="row text-center">
                  <input type="radio" name="animales" id="Perro" value="P">
                  <label class="label-radio col-6 animales" for="Perro">Perro</label>
                  <input type="radio" name="animales" id="Gato" value="G">
                  <label class="label-radio col-6 animales" for="Gato">Gato</label>
                  </div>
                  <h5 class="text-center" style="margin-bottom: 5%">genero de la mascota</h5>
                  <div class="row text-center">
                  <input type="radio" name="sexo" id="Macho" value="M">
                  <label class="label-radio col-6 sexo" for="Macho">Macho</label>
                  <input type="radio" name="sexo" id="Hembra" value="H">
                  <label class="label-radio col-6 sexo" for="Hembra">Hembra</label>
                  </div>    
                  <h5 class="text-center" style="margin-bottom: 5%">estado en que se encuentra la mascota</h5>
                  <div class="row text-center">
                  <input type="radio" name="estado" id="Vivo" value="V">
                  <label class="label-radio col-6 estado" for="Vivo">Vivo</label>
                  <input type="radio" name="estado" id="Muerto" value="M">
                  <label class="label-radio col-6 estado" for="Muerto">Muerto</label>
                  </div>
                  <label style="margin-top: 22px">fecha de nacimiento:</label> 
                  <?php echo '<input type="date" name="fecha_nac" required value="'.$fila['fecha_nac'].'" style="margin-top: 20px">'?>
                  <label>Cambie de propietario: </label><select class="custom-select-sm" name="propietario" required style="margin-top: 20px">
              <?php  
              echo '<option value="'.$fila['propietario'].'">'.$fila['nombre_completo'].'</option>';
              $conexion=pg_connect("host=localhost dbname=mascotas user=mascota password=1234");
              $sql="SELECT * FROM public.clientes";  
              $insertar=pg_query($conexion,$sql); 
              while ($datos = pg_fetch_array($insertar)) {
                ?>
              <option value="<?php echo $datos['id']?>"><?php echo $datos['nombre_completo']?></option>
              <?php
              }
              ?>
              </select>
               <input type="submit" class="btn" name="Actualizar_datos" value="Actualizar datos" style="margin-top: 20px">
              </form>
    <?php 
  }
} 
 ?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</html>