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
		//echo "<table><tr>";
		echo "<form action='46_actualizar.php' method='get' accept-charset='utf-8'>";
		echo "<input type='text' name='c_art' value='" 		. $fila['codigoArticulo'] 	. "'><br>";
		echo "<input type='text' name='seccion' value='" 	. $fila['seccion'] 			. "'><br>";
		echo "<input type='text' name='n_art' value='" 		. $fila['nombreArticulo'] 	. "'><br>";
		echo "<input type='text' name='precio' value='" 	. $fila['precio'] 			. "'><br>";
		echo "<input type='text' name='fecha' value='" 		. $fila['fecha'] 			. "'><br>";
		echo "<input type='text' name='importado' value='" 	. $fila['importado'] 		. "'><br>";
		echo "<input type='text' name='p_oirg' value='" 	. $fila['paisOrigen'] 		. "'><br>";

		echo "<input type='submit' name='enviando' value='Actualizar'>";
		echo "</form>";

	}

	mysqli_close($conexion);

?>
</body>
</html>