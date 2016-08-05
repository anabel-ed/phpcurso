<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conexcion a bases de datos</title>
	<link rel="stylesheet" href="style.php">
</head>
<body>
<?php

	$conexion = new mysqli("localhost", "root", "root", "prueba");
	if ($conexion->connect_errno) {

		echo "Fallo conexión " . $conexion->connect_errno;

	}

	//mysqli_set_charset($conexion, "utf-8")*/
	$conexion->set_charset("utf-8");
	$sql = "SELECT * FROM productos";
	//$resultado = mysqli_query($conexion, $sql);
	$resultado = $conexion->query($sql);

	if ($conexion->errno)
	{
		die($conexion->error);
	}

	while ($fila = $resultado->fetch_assoc()) 
	{
		echo "<table><tr><td>";
		echo $fila['codigoArticulo'] . "</td><td>";
		echo $fila['seccion'] . "</td><td>";
		echo $fila['nombreArticulo'] . "</td><td>";
		echo $fila['precio'] . "</td><td>";
		echo $fila['fecha'] . "</td><td>";
		echo $fila['importado'] . "</td><td>";
		echo $fila['paisOrigen'] . "</td></tr></table>";
		echo "<br>";
	}

	$conexion->close();

?>
</body>
</html>