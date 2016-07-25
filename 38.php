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

	while ($fila = mysqli_fetch_row($resultados))
	{
		echo "<table><tr>";
		echo "<td>";
		echo $fila[0] . "</td><td>";
		echo $fila[1] . "</td><td>";
		echo $fila[3] . "</td><td>";
		echo $fila[4] . "</td><td>";
		echo $fila[5] . "</td><td>";
		echo $fila[6] . "</td><td>";
		echo $fila[7] . "</td><td>";
		echo $fila[8] . "</td></tr></table>";
		echo "<br>";
	}

	mysqli_close($conexion);

?>
</body>
</html>