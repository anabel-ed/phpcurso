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

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$consulta = "SELECT * FROM Listado_Productos WHERE Proveedor = 'Exotic Liquids' ";

	$resultados = mysqli_query($conexion, $consulta);

	while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))
	{
		echo "<table><tr>";
		echo "<td>";
		echo $fila['IdProducto'] . "</td><td>";
		echo $fila['Proveedor'] . "</td><td>";
		echo $fila['PrecioUnidad'] . "</td></tr></table>";
		echo "<br>";
	}

	mysqli_close($conexion);

?>
</body>
</html>