<?php
	include 'conexion_bd.php';
	$codigo_us=$_GET['codigo_us'];
	$buscar="SELECT nombre_us_us FROM usuario_cliente WHERE codigo_us ='$codigo_us'";
	$resultado=$conexion->query($buscar);
while($fila=$resultado->fetch_array())
{
 $nombre[]=array_map('utf8_encode', $fila);
}
echo json_encode($nombre);
$resultado->close();
?>