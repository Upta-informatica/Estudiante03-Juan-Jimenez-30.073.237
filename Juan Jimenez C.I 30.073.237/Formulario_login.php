<!DOCTYPE html>
<html>
<head>
	<title>
		Login 
	</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css2/estilo_formulario_sesion.css">
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	 <style type="text/css">
	 #caja{
	  margin-top: 20%;
	  margin-right: auto;
	  margin-left: auto;
	 }
	</style>
</head>
<body>
	<div class="contenedor" id="caja">
		<form class="formulario" id="formulario" name="formulario" method="POST" action="autentificacion.php">
			<div class="contenedor-inputs">
				<h4 class="text-xl-center">Ingrese su usuario</h4>
				<input type="email" name="email" placeholder="Correo">
				<input type="password" name="password" placeholder="contraseña">
			<?php if (isset($error)){echo "<p class='text-xl-center'>$error</p>";}?>
			<input type="submit" class="btn" name="ingresar" value="ingresar">
		</form>
	</div>
</body>
</html>