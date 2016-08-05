<?php
	
	$cod = $_GET["c_art"];
	$sec = $_GET["seccion"];
	$nom = $_GET["n_art"];
	$pre = $_GET["precio"];
	$fec = $_GET["fecha"];
	$imp = $_GET["importado"];
	$por = $_GET["p_orig"];

	require("ConexionBD.php");

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$consulta = "DELETE FROM productos WHERE codigoArticulo = '$cod'";

	$resultados = mysqli_query($conexion, $consulta);

	if ($resultados == false)
	{
		//echo "error en la consulta";
	}else{
		//echo "Registro eliminado";
		//echo mysqli_affected_rows($conexion);
		if (mysqli_affected_rows($conexion) == 0)
		{
			echo "No hay registros que eliminar con ese criterio";
		}else{
			echo "Se han Eliminado ". mysqli_affected_rows($conexion) . " registros";
		}
	}

	mysqli_close($conexion);


?>