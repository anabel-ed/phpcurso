<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conexion Bases de Datos</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	$bd_host = "localhost";
	$bd_nombre = "prueba";
	$bd_usuario	= "root";
	$bd_password = "root";

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password, $bd_nombre);

	$consulta = "SELECT * FROM datospersonales";

	$resultados = mysqli_query($conexion, $consulta);

	$fila = mysqli_fetch_row($resultados);

	echo $fila[0] . " ";
	echo $fila[1] . " ";
	echo $fila[2] . " ";
	echo $fila[3];

?>
</body>
</html>