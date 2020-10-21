<?php
include_once ('inicio_de_sesion.php');
$cerrar_sesion= new sesion_de_usuario();
$cerrar_sesion->cerrar_sesion();
header("location:index.html");
?>