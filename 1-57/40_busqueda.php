<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conexion Bases de Datos</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	require("ConexionBD.php");

	$busqueda = $_GET["buscar"];

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$consulta = "SELECT * FROM productos WHERE codigoArticulo LIKE '%$busqueda%' ";

	$resultados = mysqli_query($conexion, $consulta);

	while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))
	{
		echo "<table><tr>";
		echo "<td>";
		echo $fila['codigoArticulo'] . "</td><td>";
		echo $fila['seccion'] . "</td><td>";
		echo $fila['nombreArticulo'] . "</td><td>";
		echo $fila['precio'] . "</td><td>";
		echo $fila['fecha'] . "</td><td>";
		echo $fila['importado'] . "</td><td>";
		echo $fila['paisOrigen'] . "</td></tr></table>";
		echo "<br>";
	}

	mysqli_close($conexion);

?>
</body>
</html>