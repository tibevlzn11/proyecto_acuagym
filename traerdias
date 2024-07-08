<?php

include "conexion_bd.php";

$codigo_us=$_GET['codigo_us'];

$numero_elemento="SELECT @i := @i + 1 as contador, dia FROM horario_de_usuario cross join (select @i := 0)horario_de_usuario where codigo_us='".$codigo_us."'";

$resultado=$conexion->query($numero_elemento);
while($fila=$resultado->fetch_array())
{
	$numeroDia[]=array_map('utf8_encode', $fila);
}
echo json_encode($numeroDia);
$resultado->close();
?>