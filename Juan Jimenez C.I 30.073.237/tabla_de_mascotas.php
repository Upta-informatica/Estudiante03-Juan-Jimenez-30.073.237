<?php
    include ('conexion.php');
    include ('Funciones_mascota.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset ="UTF -8">
 <title>Mascotas</title>
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
		      	<td class="text-center">dueño</td>
		      	<td class="text-center">tipo</td>
		      	<td class="text-center">genero</td>
		      	<td class="text-center">estado</td>
		      	<td class="text-center">fecha de nacimiento</td>
		      	<td class="text-center">fecha de añadido</td> 
            <td><a href="Formulario_mascota.php"><button type="button" class="btn btn-primary">Crear mascota</button></a></td></tr>
		</thead>
		<tbody>
	<?php
	$consultas= new mascotas();
	$filas= $consultas->Cargar_mascotas();
 if($filas!=null){	foreach ($filas as $fila){?>
		<tr>
		  <td class="text-center"><?php echo $fila['id'] ?></td>
		  <td class="text-center"><?php echo $fila['nombre'] ?></td>		 
		  <td class="text-center"><?php echo $fila['nombre_completo'] ?></td>
	    <td class="text-center"><?php if ($fila['tipo']=="P"){ echo "Perro";} else{echo "Gato";}?></td>
	    <td class="text-center"><?php if ($fila['genero']=="M"){ echo "Macho";} else{echo "Hembra";}?></td>
	    <td class="text-center"><?php if ($fila['estado']=="M"){ echo "Muerto";} else{echo "Vivo";}?></td>
      <td class="text-center"><?php echo date("d/m/Y",strtotime($fila['fecha_nac']))?></td>
     	<td class="text-center"><?php echo date("d/m/Y",strtotime($fila['fecha_add']))?></td>
      <?php echo "
      <td> 
      <a href='eliminar_mascotas.php?id=".$fila['id']."'><button type='button' class='btn btn-danger'>eliminar</button></a> 
      <a href='modificar_mascota.php?id=".$fila['id']."'><button type='button' class='btn btn-success'>modificar</button></a>
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