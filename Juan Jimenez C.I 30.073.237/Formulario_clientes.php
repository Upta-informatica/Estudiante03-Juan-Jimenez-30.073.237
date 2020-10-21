<!DOCTYPE html>
 <html >
 <head >
 <meta charset ="UTF -8">
 <title>Crear clientes</title>
 <style type="text/css">
 </style>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css2/estilo_formularios.css">
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 <style type="text/css">
 #caja{
  margin-top: 15%;
  margin-right: auto;
  margin-left: auto;
 }
 </style>
</head>
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
      <a class="dropdown-item" href="tabla_de_doctor.php">doctores</a>
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
</nav>
  <div class="contenedor" id="caja">
 <form class="formulario" id="formulario" name="formulario" method="POST" action="insertar_clientes.php">
      <div class="contenedor-inputs">
        <h4 class="text-xl-center">Crear nuevo cliente</h4>
        <input type="text" name="nombre" placeholder="Nombre/apellido " pattern ="[a-záéíóúA-ZÁÉÍÓÚ ]*">
        <input type="text" name="direccion" placeholder="direccion" pattern ="[a-záéíóúA-ZÁÉÍÓÚ ]*" >
        <input type="text" name="telefono" placeholder="telefono"patterm="[0-9]+">
      <input type="submit" class="btn" name="registrarse" value="Registrate">
    </form>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</html>