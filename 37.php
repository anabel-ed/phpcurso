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

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$consulta = "SELECT * FROM datospersonales";

	$resultados = mysqli_query($conexion, $consulta);

	while ($fila = mysqli_fetch_row($resultados))
	{
		echo $fila[0] . " ";
		echo $fila[1] . " ";
		echo $fila[2] . " ";
		echo $fila[3];
		echo "<br>";
	}

	mysqli_close($conexion);

?>
</body>
</html>