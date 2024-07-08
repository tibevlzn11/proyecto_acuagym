<?php
	include 'conexion_bd.php';
	
	$codigo_us=$_POST['codigo_us'];
	//$codigo_us="1010";
	$buscar="SELECT * FROM usuario_cliente WHERE codigo_us='$codigo_us'";
	$res=mysqli_query($conexion, $buscar);
	if (mysqli_num_rows($res) > 0){
		echo "correcto";
	}else{
		echo "incorrecto";
	}

	mysqli_close($conexion);
?>