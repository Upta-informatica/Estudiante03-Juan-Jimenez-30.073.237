<?php 
include_once('conexion.php');
include_once('Funciones_doctores.php');
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
  $consultas= new doctores();
  $id=$_GET['id'];
  $filas = $consultas->Cargar_doctor($id);
  foreach ($filas as $fila){?>
            <div class="contenedor" id="caja">
 <form class="formulario" id="formulario" name="formulario" method="POST" action="guardar_cambio_de_doctores.php">
      <div class="contenedor-inputs">
      <?php echo '
      <input type="hidden" name="id" value="'.$id.'">
      <input type="text" name="nombre" value="'.$fila['nombre_completo'].'" pattern ="[a-záéíóúA-ZÁÉÍÓÚ ]*">
      <input type="text" name="direccion" value="'.$fila['direccion'].'" pattern ="[a-záéíóúA-ZÁÉÍÓÚ ]*" >
      <input type="text" name="telefono" value="'.$fila['telefono'].'" patterm="[0-9]+">';
      ?>
      <input type="submit" class="btn" name="Actualizar_datos" value="Actualizar datos" style="margin-top: 20px">
      </form>
    <?php 
  }
} 
 ?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</html>