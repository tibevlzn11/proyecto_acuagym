<?php
include "conexion_bd.php";
$codigo_us=$_GET['codigo_us'];
$numero_elemento="select count(*) from horario_de_usuario where codigo_us='".$codigo_us."'";
$resultado=$conexion->query($numero_elemento);
while($fila=$resultado->fetch_array())
{
 $numero[]=array_map('utf8_encode', $fila);
}
echo json_encode($numero);
$resultado->close();
?>