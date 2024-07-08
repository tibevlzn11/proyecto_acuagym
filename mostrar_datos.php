<?php
include 'conexion_bd.php';
//$dia=$_GET['dia'];
//$codigo_us=$_GET['codigo_us'];
$dia="28/11/20";
$codigo_us="4690";
$buscar="SELECT * FROM horario_de_usuario WHERE dia='$dia' AND codigo_us='$codigo_us'";
$resultado=$conexion->query($buscar);

while($fila=$resultado->fetch_array())
{
	$tarjeta_cita[]= array_map('utf8_encode',$fila);	
}
echo json_encode($tarjeta_cita);
$resultado -> close();
?>