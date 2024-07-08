<?php
	include 'conexion_bd.php';

	//$nombre_us_us="Tiberio";
	//$password_us="tiber110294";
	$codigo_us=$_POST['codigo_us'];
	$password_us=$_POST['password_us'];
	$buscar="SELECT * FROM usuario_cliente WHERE codigo_us ='$codigo_us' AND password_us='$password_us'";
	$res=mysqli_query($conexion, $buscar);
	if (mysqli_num_rows($res) > 0){
		echo "correcto";
	}else{
		echo "incorrecto";
	}

	mysqli_close($conexion);
?>