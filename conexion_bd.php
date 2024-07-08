<?php 
	   $hostname='localhost';
	   $username='root';
	   $password='';
	   $namedb='aquagym_proyecto';

	   $conexion=new mysqli($hostname, $username, $password, $namedb);
	   if($conexion->connect_errno)
	   {
	   		echo "lo sentimos, el sitio web tiene problemas";
	   }

?> 