<?php 
	include 'conexion_bd.php';
	
 	$codigo_us=$_POST['codigo_us'];
 	$nombre_us=$_POST['nombre_us'];
	$apellido_pat=$_POST['apellido_pat'];
	$apellido_mat=$_POST['apellido_mat'];
	$password_us=$_POST['password_us'];

$consulta="insert into usuario_cliente values('".$codigo_us."', '".$nombre_us."','".$apellido_pat."','".$apellido_mat."','".$password_us."')";

	mysqli_query($conexion,$consulta) or die (mysql_error());
	mysqli_close($conexion);
?> 