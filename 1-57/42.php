<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registros</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

	//$busqueda = $_GET["buscar"];

	require("ConexionBD.php");

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$consulta = "INSERT INTO productos (codigoArticulo, seccion, nombreArticulo) VALUES ('AR03', 'DEPORTES', 'RAQUETA DE TENNIS')";

	$resultados = mysqli_query($conexion, $consulta);

	

	mysqli_close($conexion);
	

?>
</body>
</html>