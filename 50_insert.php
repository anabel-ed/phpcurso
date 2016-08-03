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

	$pais = $_GET["buscar"];

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$sql = "SELECT codigoArticulo, seccion, precio, paisOrigen FROM productos WHERE paisOrigen = ?";

	$resultado = mysqli_prepare($conexion, $sql);

	$ok = mysqli_stmt_bind_param($resultado, "s", $pais);

	$ok = mysqli_stmt_execute($resultado);

	if ($ok == false) 
	{
		echo "error al ejecutar la consulta";

	}else{

		$ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
		echo "Articulos encontrados: " . "<br><br>";
		while (mysqli_stmt_fetch($resultado))
		{
			
			echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";

		}

		mysqli_stmt_close($resultado);

	}

	

?>
</body>
</html>