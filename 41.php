<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
	<link rel="stylesheet" href="style.css">

<?php

	function ejecutaConsulta($labusqueda)
	{
		require("ConexionBD.php");

		//$busqueda = $_GET["buscar"];

		$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

		if (mysqli_connect_errno())
		{
			echo "No pudo conectar a la base de datos";
			exit();
		}
		mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

		mysqli_set_charset($conexion, "utf-8");

		$consulta = "SELECT * FROM Listado_Productos WHERE Proveedor LIKE '%$labusqueda%' ";

		$resultados = mysqli_query($conexion, $consulta);

		while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))
		{
			echo "<table><tr>";
			echo "<td>";
			echo $fila['IdProducto'] . "</td><td>";
			echo $fila['Proveedor'] . "</td><td>";
			echo $fila['Categoría'] . "</td><td>";
			echo $fila['PrecioUnidad'] . "</td><td>";
			echo $fila['CantidadPorUnidad'] . "</td><td>";
			echo $fila['UnidadesEnExistencia'] . "</td></tr></table>";
			echo "<br>";
		}

		mysqli_close($conexion);
	}

?>

</head>
<body>

<?php
	
	$mibusqueda = $_GET["buscar"];

	$mipagna = $_SERVER["PHP_SELF"];

	if ($mibusqueda != NULL)
	{
		ejecutaConsulta($mibusqueda);
	}else{
		echo ("	<form action='" . $mipagna . "' method='get'>
				<label>Buscar: <input type='text' name='buscar'></label>
				<input type='submit' name='enviando' value='Enviar' placeholder='Introduce busqueda'>
				</form>");
	}

?>
	
</body>
</html>