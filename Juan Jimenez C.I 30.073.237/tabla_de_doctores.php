<?php
    include ('conexion.php');
    include ('Funciones_doctores.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset ="UTF -8">
 <title>Doctores</title>
 <style type="text/css">
   #caja{
  margin-top: auto;
  margin-right: auto;
  margin-left: auto;
 }
 </style>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css2/estilo_formularios.css">
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
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
<div class="container" id="caja">
	 <table class="table">
	 	<thead>
			<tr>
				  <td class="text-center">id</td>
		      <td class="text-center">nombre</td>
		      <td class="text-center">direccion</td>
		      <td class="text-center">telefono</td>
		    	<td class="text-center">fecha de añadido</td> 	
          <td><a href="Formulario_doctores.php"><button type="button" class="btn btn-primary">Crear doctor</button></a></td>
		  </tr>
		</thead>
		<tbody>
	<?php
	$consultas= new doctores();
	$filas= $consultas->Cargar_doctores();
 if($filas!=null){	foreach ($filas as $fila){?>
		<tr>
		 <td class="text-center"><?php echo $fila['id'] ?></td>
		 <td class="text-center"><?php echo $fila['nombre_completo'] ?></td>     
     <td class="text-center"><?php echo $fila['direccion'] ?></td> 
          <td class="text-center"><?php echo $fila['telefono'] ?></td> 
     <td class="text-center"><?php echo date("d/m/Y",strtotime($fila['fecha_add']))?></td>
     <?php echo "
     <td> 
     <a href='eliminar_doctors.php?id=".$fila['id']."'><button type='button' class='btn btn-danger'>eliminar</button></a>
     <a href='modificar_doctor.php?id=".$fila['id']."'><button type='button' class='btn btn-success'>modificar</button></a>
     </td>"?>
		</tr>
<?php
  }
}
?>
     	</tbody>
     </table>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</html>