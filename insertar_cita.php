<?php
include 'conexion_bd.php';
$id_reg_hora=$_POST['id_reg_hora'];
$dia=$_POST['dia'];
$area_pesas=$_POST['area_pesas'];
$area_cardio=$_POST['area_cardio'];
$area_alberca=$_POST['area_alberca'];
$codigo_us=$_POST['codigo_us'];

$consulta="insert into horario_de_usuario values('".$id_reg_hora."','".$dia."', '".$area_pesas."', '".$area_cardio."','".$area_alberca."','".$codigo_us."')";
mysqli_query($conexion, $consulta) or die (mysql_error());
mysqli_close($conexion);

?>